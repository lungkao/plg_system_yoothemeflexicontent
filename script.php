<?php

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Filesystem\Folder;

class PlgSystemYoothemeflexicontentInstallerScript
{
    protected string $package = 'builder-source-flexicontent';

    public function postflight($type, $parent): bool
    {
        $this->patchYoothemeBuilderConfig();
        $this->patchYoothemeSourceService();
        $this->patchYoothemeJoomlaSourceConfig();
        $this->syncBuilderElementCache($parent->getParent()->getPath('source'));
        $this->syncPackage($parent->getParent()->getPath('source'));
        $this->clearYoothemeSchemaCache();
        $this->enablePlugin();
        $this->orderBeforeYootheme();

        return true;
    }

    public function uninstall($parent): bool
    {
        $target = JPATH_SITE . "/templates/yootheme/packages/{$this->package}";

        if (is_dir($target)) {
            Folder::delete($target);
        }

        $this->clearYoothemeSchemaCache();

        return true;
    }

    protected function syncPackage(string $sourceRoot): void
    {
        $source = "{$sourceRoot}/packages/{$this->package}";
        $target = JPATH_SITE . "/templates/yootheme/packages/{$this->package}";

        if (!is_dir($source) || !is_dir(JPATH_SITE . '/templates/yootheme/packages')) {
            return;
        }

        if (is_dir($target)) {
            Folder::delete($target);
        }

        Folder::copy($source, $target);
    }

    protected function syncBuilderElementCache(string $sourceRoot): void
    {
        $source = "{$sourceRoot}/builder-elements.cache.php";
        $target = JPATH_SITE . '/templates/yootheme/packages/builder/src/Builder/elements.cache.php';

        if (is_file($source) && is_dir(dirname($target))) {
            File::copy($source, $target);
        }
    }

    protected function clearYoothemeSchemaCache(): void
    {
        $files = Folder::files(JPATH_SITE . '/templates/yootheme/cache', '^schema-.*\.gql$', false, true);

        foreach ($files ?: [] as $file) {
            File::delete($file);
        }

        try {
            Factory::getApplication()->enqueueMessage(
                'YOOtheme FLEXIContent source installed. Reopen YOOtheme Customizer if it is already open.',
            );
        } catch (Throwable $e) {
        }
    }

    protected function enablePlugin(): void
    {
        $db = Factory::getDbo();
        $query = $db->getQuery(true)
            ->update($db->quoteName('#__extensions'))
            ->set($db->quoteName('enabled') . ' = 1')
            ->where($db->quoteName('type') . ' = ' . $db->quote('plugin'))
            ->where($db->quoteName('folder') . ' = ' . $db->quote('system'))
            ->where($db->quoteName('element') . ' = ' . $db->quote('yoothemeflexicontent'));

        try {
            $db->setQuery($query)->execute();
        } catch (Throwable $e) {
        }
    }

    protected function orderBeforeYootheme(): void
    {
        $db = Factory::getDbo();

        try {
            $query = $db->getQuery(true)
                ->select($db->quoteName('ordering'))
                ->from($db->quoteName('#__extensions'))
                ->where($db->quoteName('type') . ' = ' . $db->quote('plugin'))
                ->where($db->quoteName('folder') . ' = ' . $db->quote('system'))
                ->where($db->quoteName('element') . ' = ' . $db->quote('yootheme'));

            $ordering = (int) $db->setQuery($query)->loadResult();

            $query = $db->getQuery(true)
                ->update($db->quoteName('#__extensions'))
                ->set($db->quoteName('ordering') . ' = ' . ($ordering - 1))
                ->where($db->quoteName('type') . ' = ' . $db->quote('plugin'))
                ->where($db->quoteName('folder') . ' = ' . $db->quote('system'))
                ->where($db->quoteName('element') . ' = ' . $db->quote('yoothemeflexicontent'));

            $db->setQuery($query)->execute();
        } catch (Throwable $e) {
        }
    }

    protected function patchYoothemeBuilderConfig(): void
    {
        $builderConfig = JPATH_SITE . '/templates/yootheme/packages/builder/src/Builder/BuilderConfig.php';

        if (!is_file($builderConfig)) {
            return;
        }

        $configCode = file_get_contents($builderConfig);

        if (
            $configCode === false
            || (
                str_contains($configCode, 'static::loadElements()')
                && str_contains($configCode, '$element = @include $file')
                && !str_contains($configCode, 'Builder $builder')
            )
        ) {
            return;
        }

        $patched = <<<'PHP'
<?php

namespace YOOtheme\Builder;

use YOOtheme\ConfigObject;

class BuilderConfig extends ConfigObject
{
    protected static bool $loading = false;

    public function __construct()
    {
        if (static::$loading) {
            parent::__construct(['elements' => []]);
            return;
        }

        static::$loading = true;

        try {
            parent::__construct(['elements' => static::loadElements()]);
        } finally {
            static::$loading = false;
        }
    }

    protected static function loadElements(): array
    {
        $cache = __DIR__ . '/elements.cache.php';

        if (is_file($cache)) {
            $elements = require $cache;

            if (is_array($elements)) {
                return static::normalizeElements($elements);
            }
        }

        return static::scanElements();
    }

    protected static function normalizeElements(array $elements): array
    {
        $builder = static::loadBuilderConfig();

        foreach ($elements as $name => $element) {
            if (!is_array($element)) {
                continue;
            }

            $elements[$name] = static::normalizeElementAssets($element, $builder);
        }

        return $elements;
    }

    protected static function loadBuilderConfig(): array
    {
        return static::loadConfigFile(dirname(__DIR__, 2) . '/config/builder.php');
    }

    protected static function loadConfigFile(string $file): array
    {
        if (!is_file($file)) {
            return [];
        }

        $config = require $file;

        if (!is_array($config)) {
            return [];
        }

        foreach ((array) ($config['@import'] ?? []) as $import) {
            $config = array_replace_recursive(
                $config,
                static::loadConfigFile(str_starts_with($import, '/') ? $import : dirname($file) . '/' . $import),
            );
        }

        unset($config['@import']);

        return $config;
    }

    protected static function scanElements(): array
    {
        $elements = [];
        $packages = dirname(__DIR__, 3);
        $paths = [
            "{$packages}/builder/elements/*/element.php",
            "{$packages}/builder-joomla/elements/*/element.php",
            "{$packages}/builder-joomla-source/elements/*/element.php",
            "{$packages}/builder-newsletter/elements/*/element.php",
        ];

        foreach ($paths as $path) {
            foreach (glob($path) ?: [] as $file) {
                $code = file_get_contents($file) ?: '';
                $name = static::matchString($code, 'name') ?: basename(dirname($file));
                $title = static::matchString($code, 'title') ?: ucwords(str_replace(['_', '-'], ' ', $name));
                $group = static::matchString($code, 'group');

                $elements[$name] = static::normalizeElementAssets(array_filter([
                    'name' => $name,
                    'title' => $title,
                    'group' => $group,
                    'path' => dirname($file),
                    'element' => str_contains($code, "'element' => true"),
                    'container' => str_contains($code, "'container' => true"),
                ], static fn($value) => $value !== null && $value !== false && $value !== ''), static::loadBuilderConfig());
            }
        }

        return $elements;
    }

    protected static function normalizeElementAssets(array $element, array $builder): array
    {
        $path = $element['path'] ?? null;

        if (!$path && isset($element['name'])) {
            $path = static::findElementPath((string) $element['name']);
        }

        if (!$path) {
            return $element;
        }

        $element = static::resolveElementValue($element, $path, $builder);

        unset($element['path'], $element['file']);

        return $element;
    }

    protected static function resolveElementValue($value, string $path, array $builder)
    {
        if (is_array($value)) {
            foreach ($value as $key => $item) {
                $value[$key] = static::resolveElementValue($item, $path, $builder);
            }

            return $value;
        }

        if (!is_string($value)) {
            return $value;
        }

        if (preg_match('/^\$\{builder\.([^}]+)}$/', $value, $matches)) {
            return $builder[$matches[1]] ?? $value;
        }

        if (preg_match('/^\$\{url:(.+)}$/', $value, $matches)) {
            return static::toSiteUrl($path . '/' . ltrim($matches[1], '/'));
        }

        return preg_replace_callback(
            '/\$\{url:([^}]+)}/',
            static fn($matches) => static::toSiteUrl($path . '/' . ltrim($matches[1], '/')),
            $value,
        );
    }

    protected static function findElementPath(string $name): ?string
    {
        $packages = dirname(__DIR__, 3);
        $paths = [
            "{$packages}/builder/elements/{$name}",
            "{$packages}/builder-joomla/elements/{$name}",
            "{$packages}/builder-joomla-source/elements/{$name}",
            "{$packages}/builder-newsletter/elements/{$name}",
        ];

        foreach ($paths as $path) {
            if (is_file("{$path}/element.php")) {
                return $path;
            }
        }

        return null;
    }

    protected static function toSiteUrl(string $path): string
    {
        $root = str_replace('\\', '/', JPATH_SITE);
        $path = str_replace('\\', '/', $path);

        if (str_starts_with($path, $root)) {
            return substr($path, strlen($root)) ?: '/';
        }

        return $path;
    }

    protected static function matchString(string $code, string $key): ?string
    {
        return preg_match("/['\"]{$key}['\"]\\s*=>\\s*['\"]([^'\"]+)['\"]/", $code, $matches)
            ? $matches[1]
            : null;
    }
}
PHP;

        $this->backupFile($builderConfig);
        file_put_contents($builderConfig, $patched);
    }

    protected function patchYoothemeSourceService(): void
    {
        $file = JPATH_SITE . '/templates/yootheme/packages/builder-source/bootstrap.php';

        if (!is_file($file)) {
            return;
        }

        $code = file_get_contents($file);

        if ($code === false || str_contains($code, 'static $source;')) {
            return;
        }

        $code = str_replace(
            "        Source::class => function (SliceDirective \$slice, ObjectScalarType \$objectType) {\n            \$source = new Source([new ContainerPlugin(Application::getInstance())]);",
            "        Source::class => function (SliceDirective \$slice, ObjectScalarType \$objectType) {\n            static \$source;\n            static \$initializing = false;\n\n            if (\$source) {\n                return \$source;\n            }\n\n            \$source = new Source([new ContainerPlugin(Application::getInstance())]);",
            $code,
        );

        $code = str_replace(
            "            Event::emit('source.init', \$source);\n\n            return \$source;",
            "            if (!\$initializing) {\n                \$initializing = true;\n\n                try {\n                    Event::emit('source.init', \$source);\n                } finally {\n                    \$initializing = false;\n                }\n            }\n\n            return \$source;",
            $code,
        );

        $this->backupFile($file);
        file_put_contents($file, $code);
    }

    protected function patchYoothemeJoomlaSourceConfig(): void
    {
        $bootstrap = JPATH_SITE . '/templates/yootheme/packages/builder-joomla-source/bootstrap.php';
        $listener = JPATH_SITE . '/templates/yootheme/packages/builder-joomla-source/src/Listener/LoadBuilderConfig.php';

        if (is_file($bootstrap)) {
            $code = file_get_contents($bootstrap);

            if ($code !== false) {
                $patched = str_replace(
                    "BuilderConfig::class => [Listener\\LoadBuilderConfig::class => '@handle']",
                    "BuilderConfig::class => [Listener\\LoadBuilderConfig::class => 'handle']",
                    $code,
                );

                if ($patched !== $code) {
                    $this->backupFile($bootstrap);
                    file_put_contents($bootstrap, $patched);
                }
            }
        }

        if (!is_file($listener)) {
            return;
        }

        $code = file_get_contents($listener);

        if ($code === false) {
            return;
        }

        $patched = str_replace("use Joomla\\CMS\\Application\\CMSApplication;\n", '', $code);
        $patched = preg_replace(
            '/\\n    public DatabaseDriver \\$db;\\n    public CMSApplication \\$joomla;\\n\\n    public function __construct\\(DatabaseDriver \\$db, CMSApplication \\$joomla\\)\\n    \\{\\n        \\$this->db = \\$db;\\n        \\$this->joomla = \\$joomla;\\n    \\}\\n/s',
            "\n",
            $patched,
        );
        $patched = str_replace('public function handle($config): void', 'public static function handle($config): void', $patched);

        if ($patched !== $code) {
            $this->backupFile($listener);
            file_put_contents($listener, $patched);
        }
    }

    protected function backupFile(string $file): void
    {
        $backup = "{$file}.yoothemeflexicontent.bak";

        if (!is_file($backup)) {
            File::copy($file, $backup);
        }
    }
}
