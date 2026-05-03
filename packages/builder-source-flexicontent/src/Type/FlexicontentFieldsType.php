<?php

namespace YOOtheme\Builder\Source\Flexicontent\Type;

use Joomla\CMS\Categories\Categories;
use Joomla\CMS\Factory;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\Database\DatabaseDriver;
use Joomla\Registry\Registry;
use YOOtheme\Str;
use function YOOtheme\app;
use function YOOtheme\trans;

class FlexicontentFieldsType
{
    public static function config(array $flexiFields): array
    {
        $fields = [];

        foreach ($flexiFields as $field) {
            $name = Str::snakeCase(str_replace('-', '_', $field->name));

            if (!$name || isset($fields[$name])) {
                $name = "field_{$field->id}";
            }

            $fieldType = strtolower((string) ($field->field_type ?? ''));
            $isImage = static::isImageFieldType($fieldType);
            $isMedia = static::isMediaFieldType($fieldType);
            $formatOptions = [
                trans('Display') => 'display',
                trans('Raw') => 'raw',
            ];

            if ($isImage) {
                $formatOptions = [
                    trans('Large Image URL') => 'display_large_src',
                    trans('Medium Image URL') => 'display_medium_src',
                    trans('Small Image URL') => 'display_small_src',
                    trans('Original Image URL') => 'display_original_src',
                    trans('Display HTML') => 'display',
                    trans('Raw') => 'raw',
                ];
            }

            $fields[$name] = [
                'type' => 'String',
                'args' => [
                    'format' => ['type' => 'String'],
                    'separator' => ['type' => 'String'],
                ],
                'metadata' => [
                    'label' => Text::_($field->label ?: $field->name),
                    'group' => trans('FLEXIContent'),
                    'arguments' => [
                        'format' => [
                            'label' => trans('Format'),
                            'description' => trans('Choose whether to return FLEXIContent rendered output or the stored raw value.'),
                            'type' => 'select',
                            'default' => $isImage ? 'display_large_src' : 'display',
                            'options' => $formatOptions,
                        ],
                        'separator' => [
                            'label' => trans('Separator'),
                            'description' => trans('Set the separator for multiple values.'),
                            'default' => ', ',
                            'enable' => 'arguments.format === "raw"',
                        ],
                    ],
                    'filters' => ['limit', 'preserve'],
                ],
                'extensions' => [
                    'call' => [
                        'func' => __CLASS__ . '::resolve',
                        'args' => ['field_id' => (int) $field->id],
                    ],
                ],
            ];

            if ($isMedia) {
                $fields["{$name}_url"] = [
                    'type' => 'String',
                    'metadata' => [
                        'label' => Text::_($field->label ?: $field->name) . ' ' . trans('URL'),
                        'group' => trans('FLEXIContent'),
                        'filters' => ['limit', 'preserve'],
                    ],
                    'extensions' => [
                        'call' => [
                            'func' => __CLASS__ . '::resolveMediaUrl',
                            'args' => ['field_id' => (int) $field->id],
                        ],
                    ],
                ];
            }

            $fields["{$name}_values"] = [
                'type' => ['listOf' => 'FlexicontentValue'],
                'metadata' => [
                    'label' => Text::_($field->label ?: $field->name) . ' ' . trans('Values'),
                    'group' => trans('FLEXIContent'),
                ],
                'extensions' => [
                    'call' => [
                        'func' => __CLASS__ . '::resolveValues',
                        'args' => ['field_id' => (int) $field->id],
                    ],
                ],
            ];

            if ($isImage) {
                $fields["{$name}_image"] = [
                    'type' => 'String',
                    'args' => [
                        'size' => ['type' => 'String'],
                    ],
                    'metadata' => [
                        'label' => Text::_($field->label ?: $field->name) . ' ' . trans('Image URL'),
                        'group' => trans('FLEXIContent'),
                        'arguments' => [
                            'size' => [
                                'label' => trans('Size'),
                                'type' => 'select',
                                'default' => 'large',
                                'options' => [
                                    trans('Small') => 'small',
                                    trans('Medium') => 'medium',
                                    trans('Large') => 'large',
                                    trans('Original') => 'original',
                                ],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => [
                            'func' => __CLASS__ . '::resolveImage',
                            'args' => ['field_id' => (int) $field->id],
                        ],
                    ],
                ];
            }
        }

        return [
            'fields' => $fields,
            'metadata' => [
                'label' => trans('FLEXIContent Fields'),
            ],
        ];
    }

    public static function field($item, $args, $context, $info)
    {
        return $item;
    }

    public static function resolve($item, array $args, $context, $info): ?string
    {
        if (empty($item->id) || empty($args['field_id'])) {
            return null;
        }

        $field = static::getFlexicontentField((int) $args['field_id']);

        if (!$field) {
            return null;
        }

        $itemId = (int) $item->id;
        $values = static::getFieldValues($itemId, (int) $field->id);

        if (($args['format'] ?? 'display') === 'raw') {
            return implode($args['separator'] ?? ', ', static::flattenValues($values));
        }

        $format = $args['format'] ?? 'display';
        $fallback = static::resolveFieldFallback($itemId, $field, $values, $format);

        if ($fallback !== null) {
            return $fallback;
        }

        $display = static::renderField($item, $field, $values, $format);

        return $display !== '' ? $display : implode($args['separator'] ?? ', ', static::flattenValues($values));
    }

    public static function resolveValues($item, array $args, $context, $info): array
    {
        if (empty($item->id) || empty($args['field_id'])) {
            return [];
        }

        return array_map(
            fn($value) => ['value' => $value],
            static::flattenValues(static::getFieldValues((int) $item->id, (int) $args['field_id'])),
        );
    }

    public static function resolveMediaUrl($item, array $args, $context, $info): ?string
    {
        if (empty($item->id) || empty($args['field_id'])) {
            return null;
        }

        $field = static::getFlexicontentField((int) $args['field_id']);

        if (!$field) {
            return null;
        }

        $values = static::getFieldValues((int) $item->id, (int) $field->id);
        $url = static::resolveFieldFallback((int) $item->id, $field, $values, 'url');

        if ($url) {
            return $url;
        }

        $url = static::resolveFlexicontentMediaFile((int) $item->id, $field, $values);

        if ($url) {
            return $url;
        }

        $display = static::renderField($item, $field, $values, 'display');

        return static::extractMediaUrl([$display]);
    }

    public static function resolveImage($item, array $args, $context, $info): ?string
    {
        if (empty($item->id) || empty($args['field_id'])) {
            return null;
        }

        $field = static::getFlexicontentField((int) $args['field_id']);

        if (!$field) {
            return null;
        }

        $size = in_array($args['size'] ?? 'large', ['small', 'medium', 'large', 'original'], true)
            ? $args['size']
            : 'large';

        $url = static::renderField(
            $item,
            $field,
            static::getFieldValues((int) $item->id, (int) $field->id),
            "display_{$size}_src",
        );

        return $url !== '' ? $url : static::resolveFlexicontentImageFile((int) $item->id, $field, static::getFieldValues((int) $item->id, (int) $field->id), $size);
    }

    public static function resolveCurrentItem($item, array $args, $context, $info): ?object
    {
        $input = Factory::getApplication()->getInput();

        if ($input->getCmd('option') !== 'com_flexicontent') {
            return null;
        }

        $id = $input->getInt('id') ?: $input->getInt('cid');

        return $id ? static::getArticle((int) $id) : null;
    }

    public static function resolveCurrentCategory($item, array $args, $context, $info): ?object
    {
        $input = Factory::getApplication()->getInput();
        $menu = Factory::getApplication()->getMenu()->getActive();

        $option = $input->getCmd('option') ?: ($menu->query['option'] ?? '');
        $view = $input->getCmd('view') ?: ($menu->query['view'] ?? '');

        if ($option !== 'com_flexicontent' || $view !== 'category') {
            return null;
        }

        $id = static::getInputCategoryId();

        return $id ? static::getCategory($id) : null;
    }

    public static function resolveCurrentItems($root, array $args, $context, $info): array
    {
        if (($root['template'] ?? '') !== 'com_flexicontent.category') {
            return [];
        }

        $items = array_values(
            array_filter(
                array_map(static fn($article) => static::prepareArticle($article), (array) ($root['items'] ?? [])),
            ),
        );

        if (($args['offset'] ?? 0) || ($args['limit'] ?? 0)) {
            $items = array_slice(
                $items,
                max(0, (int) ($args['offset'] ?? 0)),
                (int) ($args['limit'] ?? 0) ?: null,
            );
        }

        return $items;
    }

    public static function resolveCustomItem($item, array $args, $context, $info): ?object
    {
        $id = (int) ($args['id'] ?? 0);

        if ($id) {
            return static::getArticle($id);
        }

        $items = static::queryItems($args + ['limit' => 1]);

        return array_shift($items) ?: null;
    }

    public static function resolveCustomItems($item, array $args, $context, $info): array
    {
        return static::queryItems($args + ['limit' => 10]);
    }

    public static function resolveCustomCategory($item, array $args, $context, $info): ?object
    {
        $id = (int) ($args['id'] ?? 0);

        return $id ? static::getCategory($id) : null;
    }

    public static function resolveCustomCategories($item, array $args, $context, $info): array
    {
        return static::queryCategories($args);
    }

    public static function categoryItems($category, array $args, $context, $info): array
    {
        if (empty($category->id) || $category->id === 'root') {
            return [];
        }

        return static::queryItems($args + ['catid' => [(string) $category->id], 'limit' => 10]);
    }

    public static function getFlexicontentFields(): array
    {
        static $fields;

        if ($fields !== null) {
            return $fields;
        }

        if (!static::tableExists('#__flexicontent_fields')) {
            return $fields = [];
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__flexicontent_fields'))
            ->where($db->quoteName('published') . ' = 1')
            ->where($db->quoteName('iscore') . ' = 0')
            ->order($db->quoteName('ordering') . ', ' . $db->quoteName('name'));

        try {
            return $fields = $db->setQuery($query)->loadObjectList() ?: [];
        } catch (\Throwable $e) {
            return $fields = [];
        }
    }

    public static function getCategory(int $categoryId): ?object
    {
        static $categories = [];

        if (array_key_exists($categoryId, $categories)) {
            return $categories[$categoryId];
        }

        try {
            $category = Categories::getInstance(static::getCategoryInstance(), [
                'countItems' => true,
            ])->get($categoryId);

            if ($category) {
                return $categories[$categoryId] = $category;
            }
        } catch (\Throwable $e) {
        }

        return $categories[$categoryId] = static::getCategoryFromDatabase($categoryId);
    }

    public static function queryCategories(array $args): array
    {
        $catid = (int) ($args['catid'] ?? 0);

        try {
            $category = Categories::getInstance(static::getCategoryInstance(), [
                'countItems' => true,
            ])->get($catid);

            if ($category) {
                $categories = $category->getChildren();

                return static::sortAndSliceCategories($categories, $args);
            }
        } catch (\Throwable $e) {
        }

        return static::queryCategoriesFromDatabase($args);
    }

    protected static function getFlexicontentField(int $fieldId): ?object
    {
        foreach (static::getFlexicontentFields() as $field) {
            if ((int) $field->id === $fieldId) {
                return clone $field;
            }
        }

        return null;
    }

    protected static function getArticle(int $itemId): ?object
    {
        static $articles = [];

        if (array_key_exists($itemId, $articles)) {
            return $articles[$itemId];
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select(['a.*', 'ie.type_id'])
            ->from($db->quoteName('#__content', 'a'))
            ->leftJoin($db->quoteName('#__flexicontent_items_ext', 'ie') . ' ON ie.item_id = a.id')
            ->where($db->quoteName('a.id') . ' = ' . (int) $itemId);

        try {
            return $articles[$itemId] = static::prepareArticle($db->setQuery($query)->loadObject() ?: null);
        } catch (\Throwable $e) {
            return $articles[$itemId] = null;
        }
    }

    public static function queryItems(array $args): array
    {
        if (!static::tableExists('#__flexicontent_items_ext')) {
            return [];
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $user = Factory::getApplication()->getIdentity();
        $levels = implode(',', array_map('intval', $user->getAuthorisedViewLevels()));
        $query = $db->getQuery(true)
            ->select(['a.*', 'ie.type_id'])
            ->from($db->quoteName('#__content', 'a'))
            ->innerJoin($db->quoteName('#__flexicontent_items_ext', 'ie') . ' ON ie.item_id = a.id')
            ->where('a.state = 1')
            ->where("a.access IN ({$levels})")
            ->group('a.id');

        if (!empty($args['catid'])) {
            $catids = array_values(array_filter(array_map('intval', (array) $args['catid'])));
            $catids = static::expandCategoryIds($catids, $args['include_child_categories'] ?? '');

            if ($catids) {
                $operator = ($args['cat_operator'] ?? 'IN') === 'NOT IN' ? 'NOT IN' : 'IN';

                if (static::tableExists('#__flexicontent_cats_item_relations')) {
                    if ($operator === 'IN') {
                        $query
                            ->innerJoin(
                                $db->quoteName('#__flexicontent_cats_item_relations', 'fcat') .
                                    ' ON fcat.itemid = a.id',
                            )
                            ->where('fcat.catid IN (' . implode(',', $catids) . ')');
                    } else {
                        $query->where(
                            'a.id NOT IN (SELECT itemid FROM ' .
                                $db->quoteName('#__flexicontent_cats_item_relations') .
                                ' WHERE catid IN (' .
                                implode(',', $catids) .
                                '))',
                        );
                    }
                } else {
                    $query->where('a.catid ' . $operator . ' (' . implode(',', $catids) . ')');
                }
            }
        }

        $order = $args['order'] ?? 'publish_up';
        $direction = strtoupper($args['order_direction'] ?? 'DESC') === 'ASC' ? 'ASC' : 'DESC';

        if ($order === 'rand') {
            $query->order($db->getQuery(true)->Rand());
        } else {
            $allowed = ['publish_up', 'created', 'modified', 'title', 'ordering'];
            $column = in_array($order, $allowed, true) ? $order : 'publish_up';
            $query->order($db->quoteName("a.{$column}") . " {$direction}");
        }

        try {
            $db->setQuery($query, max(0, (int) ($args['offset'] ?? 0)), max(1, (int) ($args['limit'] ?? 1)));

            return array_values(
                array_filter(
                    array_map(static fn($article) => static::prepareArticle($article), $db->loadObjectList() ?: []),
                ),
            );
        } catch (\Throwable $e) {
            return [];
        }
    }

    protected static function prepareArticle(?object $article): ?object
    {
        if (!$article) {
            return null;
        }

        if (empty($article->params) || !$article->params instanceof Registry) {
            $params = clone ComponentHelper::getParams('com_content');
            $params->merge(new Registry($article->attribs ?? ''));
            $article->params = $params;
        }

        $article->params->def('access-view', true);
        $article->params->def('access-edit', false);
        $article->params->def('show_noauth', false);
        $article->params->def('show_intro', '1');

        foreach (['created_by_alias', 'images', 'urls', 'fulltext', 'introtext', 'alias', 'language'] as $property) {
            if (!isset($article->$property)) {
                $article->$property = '';
            }
        }

        return $article;
    }

    protected static function expandCategoryIds(array $catids, string $mode): array
    {
        if (!$catids || !in_array($mode, ['include', 'only'], true)) {
            return $catids;
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select(['child.id'])
            ->from($db->quoteName('#__categories', 'parent'))
            ->innerJoin(
                $db->quoteName('#__categories', 'child') .
                    ' ON child.lft >= parent.lft AND child.rgt <= parent.rgt',
            )
            ->where('parent.id IN (' . implode(',', $catids) . ')')
            ->where('child.published = 1');

        if ($mode === 'only') {
            $query->where('child.id NOT IN (' . implode(',', $catids) . ')');
        }

        try {
            return array_map('intval', $db->setQuery($query)->loadColumn() ?: []);
        } catch (\Throwable $e) {
            return $catids;
        }
    }

    public static function getCategoryIds(int $limit = 0, array $parentIds = []): array
    {
        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $extension = ComponentHelper::getParams('com_flexicontent')->get(
            'flexi_cat_extension',
            'com_content',
        );
        $query = $db->getQuery(true)
            ->select('child.id')
            ->from($db->quoteName('#__categories', 'child'))
            ->where($db->quoteName('child.extension') . ' = ' . $db->quote($extension))
            ->where('child.published = 1')
            ->order('child.lft');

        if ($parentIds) {
            $parentIds = array_values(array_filter(array_map('intval', $parentIds)));
            $query
                ->innerJoin(
                    $db->quoteName('#__categories', 'parent') .
                        ' ON child.lft > parent.lft AND child.rgt < parent.rgt',
                )
                ->where('parent.id IN (' . implode(',', $parentIds) . ')');
        } else {
            $query->where('child.id > 1');
        }

        try {
            $db->setQuery($query, 0, $limit ?: 0);

            return array_map('intval', $db->loadColumn() ?: []);
        } catch (\Throwable $e) {
            return [];
        }
    }

    protected static function getInputCategoryId(): int
    {
        $input = Factory::getApplication()->getInput();
        $id = $input->getInt('cid') ?: $input->getInt('id');

        if ($id) {
            return $id;
        }

        $cid = $input->get('cid', 0, 'array');

        if ($cid) {
            return (int) (is_array($cid) ? reset($cid) : $cid);
        }

        $menu = Factory::getApplication()->getMenu()->getActive();

        if (!$menu) {
            return 0;
        }

        foreach (['cid', 'id', 'catid'] as $key) {
            $value = $menu->query[$key] ?? $menu->getParams()->get($key);

            if ($value) {
                return (int) (is_array($value) ? reset($value) : $value);
            }
        }

        return 0;
    }

    protected static function getCategoryExtension(): string
    {
        return (string) ComponentHelper::getParams('com_flexicontent')->get(
            'flexi_cat_extension',
            'com_content',
        );
    }

    protected static function getCategoryInstance(): string
    {
        return preg_replace('/^com_/i', '', static::getCategoryExtension()) ?: 'content';
    }

    protected static function sortAndSliceCategories(array $categories, array $args): array
    {
        $order = $args['order'] ?? 'ordering';

        if ($order === 'rand') {
            shuffle($categories);
        } elseif ($order) {
            $prop = $order === 'ordering' ? 'lft' : $order;
            usort(
                $categories,
                static fn($category, $other) => strnatcmp((string) ($category->$prop ?? ''), (string) ($other->$prop ?? '')),
            );
        }

        if (($args['order_direction'] ?? 'ASC') === 'DESC') {
            $categories = array_reverse($categories);
        }

        if (($args['offset'] ?? 0) || ($args['limit'] ?? 0)) {
            $categories = array_slice(
                $categories,
                max(0, (int) ($args['offset'] ?? 0)),
                (int) ($args['limit'] ?? 0) ?: null,
            );
        }

        return $categories;
    }

    protected static function getCategoryFromDatabase(int $categoryId): ?object
    {
        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select('c.*')
            ->from($db->quoteName('#__categories', 'c'))
            ->where($db->quoteName('c.id') . ' = ' . (int) $categoryId)
            ->where($db->quoteName('c.extension') . ' = ' . $db->quote(static::getCategoryExtension()))
            ->where($db->quoteName('c.published') . ' = 1');

        try {
            return $db->setQuery($query)->loadObject() ?: null;
        } catch (\Throwable $e) {
            return null;
        }
    }

    protected static function queryCategoriesFromDatabase(array $args): array
    {
        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $catid = (int) ($args['catid'] ?? 0);
        $order = $args['order'] ?? 'ordering';
        $direction = strtoupper($args['order_direction'] ?? 'ASC') === 'DESC' ? 'DESC' : 'ASC';
        $query = $db->getQuery(true)
            ->select('child.*')
            ->from($db->quoteName('#__categories', 'child'))
            ->where($db->quoteName('child.extension') . ' = ' . $db->quote(static::getCategoryExtension()))
            ->where($db->quoteName('child.published') . ' = 1');

        if ($catid) {
            $query
                ->innerJoin(
                    $db->quoteName('#__categories', 'parent') .
                        ' ON child.parent_id = parent.id',
                )
                ->where($db->quoteName('parent.id') . ' = ' . $catid);
        } else {
            $query->where($db->quoteName('child.level') . ' = 1');
        }

        if ($order === 'rand') {
            $query->order($db->getQuery(true)->Rand());
        } else {
            $column = $order === 'title' ? 'title' : 'lft';
            $query->order($db->quoteName("child.{$column}") . " {$direction}");
        }

        try {
            $db->setQuery(
                $query,
                max(0, (int) ($args['offset'] ?? 0)),
                max(0, (int) ($args['limit'] ?? 0)) ?: 0,
            );

            return $db->loadObjectList() ?: [];
        } catch (\Throwable $e) {
            return [];
        }
    }

    protected static function getFieldValues(int $itemId, int $fieldId): array
    {
        static $values = [];
        $key = "{$itemId}:{$fieldId}";

        if (array_key_exists($key, $values)) {
            return $values[$key];
        }

        if (!static::tableExists('#__flexicontent_fields_item_relations')) {
            return $values[$key] = [];
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select($db->quoteName('value'))
            ->from($db->quoteName('#__flexicontent_fields_item_relations'))
            ->where($db->quoteName('item_id') . ' = ' . (int) $itemId)
            ->where($db->quoteName('field_id') . ' = ' . (int) $fieldId)
            ->order($db->quoteName('valueorder') . ', ' . $db->quoteName('suborder'));

        try {
            return $values[$key] = $db->setQuery($query)->loadColumn() ?: [];
        } catch (\Throwable $e) {
            return $values[$key] = [];
        }
    }

    protected static function renderField($item, object $field, array $values, string $method = 'display'): string
    {
        if (!static::loadFlexicontentRuntime() || !class_exists('FlexicontentFields')) {
            return implode(', ', static::flattenValues($values));
        }

        $field->value = $values;
        $field->parameters = new Registry($field->attribs ?? '');
        $field->has_access = true;
        $item->fields = [$field->name => $field];
        $item->fieldvalues = [$field->id => $values];

        try {
            $view = defined('FLEXI_ITEMVIEW') ? FLEXI_ITEMVIEW : 'item';
            $rendered = \FlexicontentFields::renderField($item, $field, $values, $method, $view, true);
            $display = $rendered->{$method} ?? $field->{$method} ?? $field->display ?? '';

            if (is_array($display)) {
                return str_ends_with($method, '_src')
                    ? (string) (array_values(array_filter($display))[0] ?? '')
                    : implode('', $display);
            }

            return (string) $display;
        } catch (\Throwable $e) {
            return implode(', ', static::flattenValues($values));
        }
    }

    protected static function flattenValues(array $values): array
    {
        $flattened = [];

        foreach ($values as $value) {
            $decoded = static::decodeValue($value);

            if (is_array($decoded)) {
                $decoded = array_filter(array_map(static fn($item) => is_scalar($item) ? (string) $item : '', $decoded));
                $flattened[] = implode(' ', $decoded);
            } elseif (is_scalar($decoded)) {
                $flattened[] = (string) $decoded;
            }
        }

        return array_values(array_filter($flattened, static fn($value) => $value !== ''));
    }

    protected static function decodeValue($value)
    {
        if (!is_string($value)) {
            return $value;
        }

        $trimmed = trim($value);

        if ($trimmed === '') {
            return '';
        }

        if (str_starts_with($trimmed, '{') || str_starts_with($trimmed, '[')) {
            $json = json_decode($trimmed, true);

            if (json_last_error() === JSON_ERROR_NONE) {
                return $json;
            }
        }

        if (preg_match('/^[aOsibdCN]:|^a:\d+:/', $trimmed)) {
            $data = @unserialize($trimmed);

            if ($data !== false || $trimmed === 'b:0;') {
                return $data;
            }
        }

        return $value;
    }

    protected static function isImageFieldType(string $fieldType): bool
    {
        return $fieldType === 'image';
    }

    protected static function isMediaFieldType(string $fieldType): bool
    {
        return in_array($fieldType, ['image', 'file', 'mediafile', 'sharedmedia'], true);
    }

    protected static function resolveFieldFallback(int $itemId, object $field, array $values, string $format): ?string
    {
        $fieldType = strtolower((string) ($field->field_type ?? ''));

        if ($fieldType === 'image') {
            $size = 'large';

            if (preg_match('/display_(small|medium|large|original)_src/', $format, $matches)) {
                $size = $matches[1];
            }

            return static::resolveFlexicontentImageFile($itemId, $field, $values, $size);
        }

        if (in_array($fieldType, ['file', 'mediafile'], true)) {
            $urls = static::resolveFlexicontentMediaFiles($itemId, $field, $values);

            return $urls ? implode(', ', $urls) : null;
        }

        if ($fieldType === 'sharedmedia') {
            foreach ($values as $value) {
                $decoded = static::decodeValue($value);

                if (is_array($decoded)) {
                    return (string) ($decoded['embed_url'] ?? $decoded['url'] ?? $decoded['thumb'] ?? null);
                }
            }
        }

        if ($fieldType === 'weblink') {
            foreach ($values as $value) {
                $decoded = static::decodeValue($value);

                if (is_array($decoded)) {
                    return (string) ($decoded['link'] ?? $decoded['url'] ?? $decoded['linktext'] ?? $decoded['title'] ?? null);
                }
            }
        }

        if ($fieldType === 'relation') {
            $titles = static::resolveRelationTitles($values);

            return $titles ? implode(', ', $titles) : null;
        }

        if ($fieldType === 'addressint') {
            foreach ($values as $value) {
                $decoded = static::decodeValue($value);

                if (is_array($decoded)) {
                    return (string) ($decoded['addr_display'] ?? $decoded['address'] ?? null);
                }
            }
        }

        return null;
    }

    protected static function extractMediaUrl(array $values): ?string
    {
        foreach ($values as $value) {
            $url = static::findMediaUrl(static::decodeValue($value));

            if ($url) {
                return static::normalizeMediaUrl($url);
            }
        }

        return null;
    }

    protected static function findMediaUrl($value): ?string
    {
        if (is_array($value)) {
            foreach (['url', 'src', 'file', 'path', 'filepath', 'media', 'image', 'original', 'filename'] as $key) {
                if (!empty($value[$key])) {
                    $url = static::findMediaUrl($value[$key]);

                    if ($url) {
                        return $url;
                    }
                }
            }

            foreach ($value as $item) {
                $url = static::findMediaUrl($item);

                if ($url) {
                    return $url;
                }
            }

            return null;
        }

        if (!is_scalar($value)) {
            return null;
        }

        $value = trim((string) $value);

        if ($value === '') {
            return null;
        }

        if (preg_match('/(?:src|href)=["\']([^"\']+)["\']/i', $value, $matches)) {
            return $matches[1];
        }

        if (preg_match('~(?:^|[\s"\'])(/?(?:images|media|files|components|plugins|templates)/[^\s"\'<>]+)~i', $value, $matches)) {
            return $matches[1];
        }

        if (preg_match('~^(?:[a-z][a-z0-9+.-]*:|//|/)~i', $value)) {
            return $value;
        }

        return null;
    }

    protected static function normalizeMediaUrl(string $url): string
    {
        $url = trim(html_entity_decode($url, ENT_QUOTES | ENT_HTML5, 'UTF-8'));
        $url = trim($url, "\"' ");
        $url = str_replace('\\', '/', $url);

        if ($url === '' || preg_match('~^(?:[a-z][a-z0-9+.-]*:|//)~i', $url)) {
            return $url;
        }

        $root = str_replace('\\', '/', JPATH_ROOT);

        if (str_starts_with($url, $root . '/')) {
            $url = substr($url, strlen($root) + 1);
        }

        $url = static::encodeUrlPath(ltrim(preg_replace('~^\./~', '', $url), '/'));

        return static::rootPath() . '/' . $url;
    }

    protected static function resolveFlexicontentMediaFile(int $itemId, object $field, array $values): ?string
    {
        return static::resolveFlexicontentMediaFiles($itemId, $field, $values)[0] ?? null;
    }

    protected static function resolveFlexicontentMediaFiles(int $itemId, object $field, array $values): array
    {
        $fieldType = strtolower((string) ($field->field_type ?? ''));

        if ($fieldType === 'image') {
            $url = static::resolveFlexicontentImageFile($itemId, $field, $values);

            return $url ? [$url] : [];
        }

        if (!in_array($fieldType, ['file', 'mediafile'], true)) {
            return [];
        }

        $fileIds = array_values(array_filter(array_map('intval', static::flattenValues($values))));

        if (!$fileIds || !static::tableExists('#__flexicontent_files')) {
            return [];
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select(['id', 'filename', 'url'])
            ->from($db->quoteName('#__flexicontent_files'))
            ->where($db->quoteName('id') . ' IN (' . implode(',', $fileIds) . ')')
            ->where($db->quoteName('published') . ' = 1');

        try {
            $files = $db->setQuery($query)->loadObjectList('id') ?: [];
        } catch (\Throwable $e) {
            return [];
        }

        $urls = [];

        foreach ($fileIds as $fileId) {
            $file = $files[$fileId] ?? null;

            if (!$file || empty($file->filename)) {
                continue;
            }

            if ((int) $file->url) {
                $urls[] = static::normalizeMediaUrl((string) $file->filename);
                continue;
            }

            if ($fieldType === 'mediafile') {
                $urls[] = static::normalizeMediaUrl("components/com_flexicontent/medias/{$file->filename}");
            } else {
                $urls[] = static::rootPath() . '/index.php?option=com_flexicontent&task=download&id=' .
                    (int) $file->id . '&cid=' . $itemId . '&fid=' . (int) $field->id . '&method=view';
            }
        }

        return $urls;
    }

    protected static function resolveFlexicontentImageFile(int $itemId, object $field, array $values, string $size = 'large'): ?string
    {
        $prefix = match ($size) {
            'small' => 's_',
            'medium' => 'm_',
            'original' => 'o_',
            default => 'l_',
        };

        foreach ($values as $value) {
            $decoded = static::decodeValue($value);

            if (!is_array($decoded)) {
                continue;
            }

            $filename = trim((string) ($decoded['existingname'] ?: $decoded['originalname'] ?? ''));

            if ($filename === '') {
                continue;
            }

            $params = new Registry($field->attribs ?? '');
            $dir = trim((string) $params->get('dir', 'images/stories/flexicontent'), '/');
            $protectedOriginal = (bool) $params->get('protect_original', 1);
            $path = $size === 'original' && !$protectedOriginal
                ? "{$dir}/item_{$itemId}_field_{$field->id}/original/{$filename}"
                : "{$dir}/item_{$itemId}_field_{$field->id}/{$prefix}{$filename}";

            if (!is_file(JPATH_ROOT . '/' . $path)) {
                $path = "{$dir}/item_{$itemId}_field_{$field->id}/l_{$filename}";
            }

            return static::normalizeMediaUrl($path);
        }

        return null;
    }

    protected static function resolveRelationTitles(array $values): array
    {
        $ids = [];

        foreach (static::flattenValues($values) as $value) {
            $id = (int) strtok($value, ':');

            if ($id) {
                $ids[] = $id;
            }
        }

        $ids = array_values(array_unique($ids));

        if (!$ids) {
            return [];
        }

        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);
        $query = $db->getQuery(true)
            ->select(['id', 'title'])
            ->from($db->quoteName('#__content'))
            ->where($db->quoteName('id') . ' IN (' . implode(',', $ids) . ')');

        try {
            $titles = $db->setQuery($query)->loadAssocList('id', 'title') ?: [];
        } catch (\Throwable $e) {
            return [];
        }

        return array_values(array_filter(array_map(
            static fn($id) => $titles[$id] ?? null,
            $ids,
        )));
    }

    protected static function encodeUrlPath(string $path): string
    {
        return implode('/', array_map('rawurlencode', explode('/', $path)));
    }

    protected static function rootPath(): string
    {
        $root = rtrim((string) Uri::root(true), '/');
        $root = preg_replace('~/(administrator|api)$~', '', $root) ?: '';
        $root = preg_replace('~/index\.php$~', '', $root) ?: '';

        return rtrim($root, '/');
    }

    protected static function loadFlexicontentRuntime(): bool
    {
        static $loaded;

        if ($loaded !== null) {
            return $loaded;
        }

        $files = [
            JPATH_ADMINISTRATOR . '/components/com_flexicontent/defineconstants.php',
            JPATH_SITE . '/components/com_flexicontent/helpers/route.php',
            JPATH_SITE . '/components/com_flexicontent/classes/flexicontent.helper.php',
            JPATH_SITE . '/components/com_flexicontent/classes/flexicontent.fields.php',
        ];

        foreach ($files as $file) {
            if (is_file($file)) {
                require_once $file;
            }
        }

        PluginHelper::importPlugin('flexicontent_fields');

        return $loaded = class_exists('FlexicontentFields');
    }

    protected static function tableExists(string $table): bool
    {
        /** @var DatabaseDriver $db */
        $db = app(DatabaseDriver::class);

        try {
            return in_array($db->replacePrefix($table), $db->getTableList(), true);
        } catch (\Throwable $e) {
            return false;
        }
    }
}
