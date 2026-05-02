<?php

namespace YOOtheme\Builder\Source\Flexicontent\Listener;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use function YOOtheme\trans;

class LoadBuilderConfig
{
    public static function handle($config): void
    {
        $config->set('flexicontent_categories', static::getCategories());

        $templates = $config->get('templates', []);

        $templates['com_flexicontent.item'] = [
            'label' => trans('FLEXIContent Item'),
            'fieldset' => [
                'default' => [
                    'fields' => [
                        'catid' => static::getCategoryField(),
                        'include_child_categories' => static::getIncludeChildCategoriesField(
                            trans('The template is only assigned to FLEXIContent items from the selected categories. Use the <kbd>shift</kbd> or <kbd>ctrl/cmd</kbd> key to select multiple categories.'),
                        ),
                    ],
                ],
            ],
        ];

        $templates['com_flexicontent.category'] = [
            'label' => trans('FLEXIContent Category'),
            'fieldset' => [
                'default' => [
                    'fields' => [
                        'catid' => static::getCategoryField(),
                        'include_child_categories' => static::getIncludeChildCategoriesField(
                            trans('The template is only assigned to the selected FLEXIContent categories. Use the <kbd>shift</kbd> or <kbd>ctrl/cmd</kbd> key to select multiple categories.'),
                        ),
                        'pages' => [
                            'label' => trans('Limit by Page Number'),
                            'description' => trans('The template is only assigned to the selected pages.'),
                            'type' => 'select',
                            'options' => [
                                trans('All pages') => '',
                                trans('First page') => 'first',
                                trans('All except first page') => 'except_first',
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $config->set('templates', $templates);
    }

    protected static function getCategoryField(): array
    {
        return [
            'label' => trans('Limit by Categories'),
            'type' => 'select',
            'default' => [],
            'options' => [['evaluate' => 'yootheme.builder.flexicontent_categories']],
            'attrs' => [
                'multiple' => true,
                'class' => 'uk-height-small',
            ],
        ];
    }

    protected static function getIncludeChildCategoriesField(string $description): array
    {
        return [
            'type' => 'select',
            'description' => $description,
            'options' => [
                trans('Exclude child categories') => '',
                trans('Include child categories') => 'include',
                trans('Only include child categories') => 'only',
            ],
        ];
    }

    protected static function getCategories(): array
    {
        $db = Factory::getDbo();
        $extension = ComponentHelper::getParams('com_flexicontent')->get(
            'flexi_cat_extension',
            'com_content',
        );

        $query = $db->getQuery(true)
            ->select([
                $db->quoteName('id', 'value'),
                $db->quoteName('title', 'text'),
                $db->quoteName('level'),
            ])
            ->from($db->quoteName('#__categories'))
            ->where($db->quoteName('extension') . ' = ' . $db->quote($extension))
            ->where($db->quoteName('published') . ' = 1')
            ->where($db->quoteName('id') . ' > 1')
            ->order($db->quoteName('lft'));

        try {
            return array_map(
                static fn($category) => [
                    'value' => (string) $category->value,
                    'text' => str_repeat('- ', max(0, (int) $category->level - 1)) . $category->text,
                ],
                $db->setQuery($query, 0, 500)->loadObjectList() ?: [],
            );
        } catch (\Throwable $e) {
            return [];
        }
    }
}
