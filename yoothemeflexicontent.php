<?php

defined('_JEXEC') or die;

use Joomla\CMS\Filesystem\File;
use Joomla\CMS\Filesystem\Folder;
use Joomla\CMS\Plugin\CMSPlugin;

class PlgSystemYoothemeflexicontent extends CMSPlugin
{
    protected string $package = 'builder-source-flexicontent';

    public function __construct(&$subject, $config = [])
    {
        parent::__construct($subject, $config);

        $this->raiseMemoryLimit('1024M');
    }

    public function onAfterInitialise(): void
    {
        $source = __DIR__ . "/packages/{$this->package}";
        $target = JPATH_SITE . "/templates/yootheme/packages/{$this->package}";

        if (!is_dir($source) || !is_dir(JPATH_SITE . '/templates/yootheme/packages')) {
            return;
        }

        $this->syncBuilderElementCache();

        if ($this->isPackageCurrent($source, $target)) {
            return;
        }

        if (is_dir($target)) {
            Folder::delete($target);
        }

        Folder::copy($source, $target);
        $this->clearYoothemeSchemaCache();
    }

    protected function syncBuilderElementCache(): void
    {
        $source = __DIR__ . '/builder-elements.cache.php';
        $target = JPATH_SITE . '/templates/yootheme/packages/builder/src/Builder/elements.cache.php';

        if (!is_file($source) || !is_dir(dirname($target))) {
            return;
        }

        if (is_file($target) && md5_file($source) === md5_file($target)) {
            return;
        }

        File::copy($source, $target);
    }

    protected function isPackageCurrent(string $source, string $target): bool
    {
        if (!is_dir($target)) {
            return false;
        }

        $sourceFiles = Folder::files($source, '.', true, true);

        foreach ($sourceFiles ?: [] as $sourceFile) {
            $relative = ltrim(substr($sourceFile, strlen($source)), '/\\');
            $targetFile = "{$target}/{$relative}";

            if (!is_file($targetFile) || md5_file($sourceFile) !== md5_file($targetFile)) {
                return false;
            }
        }

        return true;
    }

    protected function clearYoothemeSchemaCache(): void
    {
        $cacheDir = JPATH_SITE . '/templates/yootheme/cache';

        if (!is_dir($cacheDir)) {
            return;
        }

        $files = Folder::files($cacheDir, '^schema-.*\.gql$', false, true);

        foreach ($files ?: [] as $file) {
            File::delete($file);
        }
    }

    protected function raiseMemoryLimit(string $memory): void
    {
        $limit = ini_get('memory_limit');

        if ($limit === '-1') {
            return;
        }

        if ($this->toBytes($limit) < $this->toBytes($memory)) {
            @ini_set('memory_limit', $memory);
        }
    }

    protected function toBytes(string $value): int
    {
        $value = trim($value);
        $unit = strtolower(substr($value, -1));
        $bytes = (int) $value;

        return match ($unit) {
            'g' => $bytes * 1024 * 1024 * 1024,
            'm' => $bytes * 1024 * 1024,
            'k' => $bytes * 1024,
            default => $bytes,
        };
    }
}
