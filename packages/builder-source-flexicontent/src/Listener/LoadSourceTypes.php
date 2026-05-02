<?php

namespace YOOtheme\Builder\Source\Flexicontent\Listener;

use YOOtheme\Builder\Source\Flexicontent\Type\FlexicontentFieldsType;
use YOOtheme\Builder\Source\Flexicontent\Type\FlexicontentValueType;
use function YOOtheme\trans;

class LoadSourceTypes
{
    public static function handle($source): void
    {
        $fields = [];

        $source->objectType('FlexicontentValue', FlexicontentValueType::config());

        if ($fields) {
            $source->objectType('ArticleFlexicontentFields', FlexicontentFieldsType::config($fields));
        }

        $source->queryType([
            'fields' => [
                'flexicontent_item' => [
                    'type' => 'Article',
                    'metadata' => [
                        'label' => trans('FLEXIContent Item'),
                        'group' => trans('Page'),
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCurrentItem',
                    ],
                ],
                'flexicontent_category' => [
                    'type' => 'Category',
                    'metadata' => [
                        'label' => trans('FLEXIContent Category'),
                        'group' => trans('Page'),
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCurrentCategory',
                    ],
                ],
                'flexicontent_items' => [
                    'type' => ['listOf' => 'Article'],
                    'args' => [
                        'offset' => ['type' => 'Int'],
                        'limit' => ['type' => 'Int'],
                    ],
                    'metadata' => [
                        'label' => trans('FLEXIContent Items'),
                        'view' => ['com_flexicontent.category'],
                        'group' => trans('Page'),
                        'fields' => [
                            '_offset' => [
                                'description' => trans('Set the starting point and limit the number of items.'),
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'offset' => [
                                        'label' => trans('Start'),
                                        'type' => 'number',
                                        'default' => 0,
                                        'modifier' => 1,
                                        'attrs' => [
                                            'min' => 1,
                                            'required' => true,
                                        ],
                                    ],
                                    'limit' => [
                                        'label' => trans('Quantity'),
                                        'type' => 'limit',
                                        'attrs' => [
                                            'placeholder' => trans('No limit'),
                                            'min' => 0,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCurrentItems',
                    ],
                ],
                'custom_flexicontent_item' => [
                    'type' => 'Article',
                    'args' => [
                        'id' => ['type' => 'String'],
                        'catid' => ['type' => ['listOf' => 'String']],
                        'include_child_categories' => ['type' => 'String'],
                        'cat_operator' => ['type' => 'String'],
                        'offset' => ['type' => 'Int'],
                        'order' => ['type' => 'String'],
                        'order_direction' => ['type' => 'String'],
                    ],
                    'metadata' => [
                        'label' => trans('Custom FLEXIContent Item'),
                        'group' => trans('Custom'),
                        'fields' => [
                            'id' => [
                                'label' => trans('Select Manually'),
                                'description' => trans('Pick a FLEXIContent item manually or use filter options to load one dynamically.'),
                                'type' => 'select-item',
                                'labels' => ['type' => trans('FLEXIContent Item')],
                            ],
                            'catid' => [
                                'label' => trans('Filter by Categories'),
                                'type' => 'select',
                                'default' => [],
                                'options' => [['evaluate' => 'yootheme.builder.flexicontent_categories']],
                                'attrs' => [
                                    'multiple' => true,
                                    'class' => 'uk-height-small',
                                ],
                                'enable' => '!id',
                            ],
                            'include_child_categories' => [
                                'type' => 'select',
                                'options' => [
                                    trans('Exclude child categories') => '',
                                    trans('Include child categories') => 'include',
                                    trans('Only include child categories') => 'only',
                                ],
                                'enable' => '!id',
                            ],
                            'cat_operator' => [
                                'type' => 'select',
                                'description' => trans('Filter FLEXIContent items by categories. Set the logical operator to match or not match the selected categories.'),
                                'default' => 'IN',
                                'options' => [
                                    trans('Match (OR)') => 'IN',
                                    trans('Don\'t match (NOR)') => 'NOT IN',
                                ],
                                'enable' => '!id',
                            ],
                            'offset' => [
                                'label' => trans('Start'),
                                'description' => trans('Set the starting point to specify which item is loaded.'),
                                'type' => 'number',
                                'default' => 0,
                                'modifier' => 1,
                                'attrs' => [
                                    'min' => 1,
                                    'required' => true,
                                ],
                                'enable' => '!id',
                            ],
                            '_order' => [
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'order' => [
                                        'label' => trans('Order'),
                                        'type' => 'select',
                                        'default' => 'publish_up',
                                        'options' => [
                                            trans('Published Date') => 'publish_up',
                                            trans('Created Date') => 'created',
                                            trans('Modified Date') => 'modified',
                                            trans('Title') => 'title',
                                            trans('Ordering') => 'ordering',
                                            trans('Random') => 'rand',
                                        ],
                                        'enable' => '!id',
                                    ],
                                    'order_direction' => [
                                        'label' => trans('Direction'),
                                        'type' => 'select',
                                        'default' => 'DESC',
                                        'options' => [
                                            trans('Ascending') => 'ASC',
                                            trans('Descending') => 'DESC',
                                        ],
                                        'enable' => '!id',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCustomItem',
                    ],
                ],
                'custom_flexicontent_items' => [
                    'type' => ['listOf' => 'Article'],
                    'args' => [
                        'catid' => ['type' => ['listOf' => 'String']],
                        'include_child_categories' => ['type' => 'String'],
                        'cat_operator' => ['type' => 'String'],
                        'offset' => ['type' => 'Int'],
                        'limit' => ['type' => 'Int'],
                        'order' => ['type' => 'String'],
                        'order_direction' => ['type' => 'String'],
                    ],
                    'metadata' => [
                        'label' => trans('Custom FLEXIContent Items'),
                        'group' => trans('Custom'),
                        'fields' => [
                            'catid' => [
                                'label' => trans('Filter by Categories'),
                                'type' => 'select',
                                'default' => [],
                                'options' => [['evaluate' => 'yootheme.builder.flexicontent_categories']],
                                'attrs' => [
                                    'multiple' => true,
                                    'class' => 'uk-height-small',
                                ],
                            ],
                            'include_child_categories' => [
                                'type' => 'select',
                                'options' => [
                                    trans('Exclude child categories') => '',
                                    trans('Include child categories') => 'include',
                                    trans('Only include child categories') => 'only',
                                ],
                            ],
                            'cat_operator' => [
                                'type' => 'select',
                                'description' => trans('Filter FLEXIContent items by categories. Set the logical operator to match or not match the selected categories.'),
                                'default' => 'IN',
                                'options' => [
                                    trans('Match (OR)') => 'IN',
                                    trans('Don\'t match (NOR)') => 'NOT IN',
                                ],
                            ],
                            '_offset' => [
                                'description' => trans('Set the starting point and limit the number of items.'),
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'offset' => [
                                        'label' => trans('Start'),
                                        'type' => 'number',
                                        'default' => 0,
                                        'modifier' => 1,
                                        'attrs' => [
                                            'min' => 1,
                                            'required' => true,
                                        ],
                                    ],
                                    'limit' => [
                                        'label' => trans('Quantity'),
                                        'type' => 'limit',
                                        'default' => 10,
                                        'attrs' => [
                                            'min' => 1,
                                        ],
                                    ],
                                ],
                            ],
                            '_order' => [
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'order' => [
                                        'label' => trans('Order'),
                                        'type' => 'select',
                                        'default' => 'publish_up',
                                        'options' => [
                                            trans('Published Date') => 'publish_up',
                                            trans('Created Date') => 'created',
                                            trans('Modified Date') => 'modified',
                                            trans('Title') => 'title',
                                            trans('Ordering') => 'ordering',
                                            trans('Random') => 'rand',
                                        ],
                                    ],
                                    'order_direction' => [
                                        'label' => trans('Direction'),
                                        'type' => 'select',
                                        'default' => 'DESC',
                                        'options' => [
                                            trans('Ascending') => 'ASC',
                                            trans('Descending') => 'DESC',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCustomItems',
                    ],
                ],
                'custom_flexicontent_category' => [
                    'type' => 'Category',
                    'args' => [
                        'id' => ['type' => 'String'],
                    ],
                    'metadata' => [
                        'label' => trans('Custom FLEXIContent Category'),
                        'group' => trans('Custom'),
                        'fields' => [
                            'id' => [
                                'label' => trans('Category'),
                                'type' => 'select',
                                'defaultIndex' => 0,
                                'options' => [['evaluate' => 'yootheme.builder.flexicontent_categories']],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCustomCategory',
                    ],
                ],
                'custom_flexicontent_categories' => [
                    'type' => ['listOf' => 'Category'],
                    'args' => [
                        'catid' => ['type' => 'String'],
                        'offset' => ['type' => 'Int'],
                        'limit' => ['type' => 'Int'],
                        'order' => ['type' => 'String'],
                        'order_direction' => ['type' => 'String'],
                    ],
                    'metadata' => [
                        'label' => trans('Custom FLEXIContent Categories'),
                        'group' => trans('Custom'),
                        'fields' => [
                            'catid' => [
                                'label' => trans('Parent Category'),
                                'description' => trans('Categories are only loaded from the selected parent category.'),
                                'type' => 'select',
                                'default' => '0',
                                'options' => [
                                    ['value' => '0', 'text' => trans('Root')],
                                    ['evaluate' => 'yootheme.builder.flexicontent_categories'],
                                ],
                            ],
                            '_offset' => [
                                'description' => trans('Set the starting point and limit the number of categories.'),
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'offset' => [
                                        'label' => trans('Start'),
                                        'type' => 'number',
                                        'default' => 0,
                                        'modifier' => 1,
                                        'attrs' => [
                                            'min' => 1,
                                            'required' => true,
                                        ],
                                    ],
                                    'limit' => [
                                        'label' => trans('Quantity'),
                                        'type' => 'limit',
                                        'default' => 10,
                                        'attrs' => [
                                            'min' => 1,
                                        ],
                                    ],
                                ],
                            ],
                            '_order' => [
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'order' => [
                                        'label' => trans('Order'),
                                        'type' => 'select',
                                        'default' => 'ordering',
                                        'options' => [
                                            trans('Alphabetical') => 'title',
                                            trans('Category Order') => 'ordering',
                                            trans('Random') => 'rand',
                                        ],
                                    ],
                                    'order_direction' => [
                                        'label' => trans('Direction'),
                                        'type' => 'select',
                                        'default' => 'ASC',
                                        'options' => [
                                            trans('Ascending') => 'ASC',
                                            trans('Descending') => 'DESC',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::resolveCustomCategories',
                    ],
                ],
            ],
        ]);

        $source->objectType('Category', [
            'fields' => [
                'flexicontentItems' => [
                    'type' => ['listOf' => 'Article'],
                    'args' => [
                        'include_child_categories' => ['type' => 'String'],
                        'offset' => ['type' => 'Int'],
                        'limit' => ['type' => 'Int'],
                        'order' => ['type' => 'String'],
                        'order_direction' => ['type' => 'String'],
                    ],
                    'metadata' => [
                        'label' => trans('FLEXIContent Items'),
                        'group' => trans('FLEXIContent'),
                        'fields' => [
                            'include_child_categories' => [
                                'type' => 'select',
                                'options' => [
                                    trans('Exclude child categories') => '',
                                    trans('Include child categories') => 'include',
                                    trans('Only include child categories') => 'only',
                                ],
                            ],
                            '_offset' => [
                                'description' => trans('Set the starting point and limit the number of items.'),
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'offset' => [
                                        'label' => trans('Start'),
                                        'type' => 'number',
                                        'default' => 0,
                                        'modifier' => 1,
                                        'attrs' => [
                                            'min' => 1,
                                            'required' => true,
                                        ],
                                    ],
                                    'limit' => [
                                        'label' => trans('Quantity'),
                                        'type' => 'limit',
                                        'default' => 10,
                                        'attrs' => [
                                            'min' => 1,
                                        ],
                                    ],
                                ],
                            ],
                            '_order' => [
                                'type' => 'grid',
                                'width' => '1-2',
                                'fields' => [
                                    'order' => [
                                        'label' => trans('Order'),
                                        'type' => 'select',
                                        'default' => 'publish_up',
                                        'options' => [
                                            trans('Published Date') => 'publish_up',
                                            trans('Created Date') => 'created',
                                            trans('Modified Date') => 'modified',
                                            trans('Title') => 'title',
                                            trans('Ordering') => 'ordering',
                                            trans('Random') => 'rand',
                                        ],
                                    ],
                                    'order_direction' => [
                                        'label' => trans('Direction'),
                                        'type' => 'select',
                                        'default' => 'DESC',
                                        'options' => [
                                            trans('Ascending') => 'ASC',
                                            trans('Descending') => 'DESC',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::categoryItems',
                    ],
                ],
            ],
        ]);

        if (!$fields) {
            return;
        }

        $source->objectType('Article', [
            'fields' => [
                'flexicontent' => [
                    'type' => 'ArticleFlexicontentFields',
                    'metadata' => [
                        'label' => trans('FLEXIContent Fields'),
                        'group' => trans('FLEXIContent'),
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::field',
                    ],
                ],
            ],
        ]);

        $source->objectType('TagItem', [
            'fields' => [
                'flexicontent' => [
                    'type' => 'ArticleFlexicontentFields',
                    'metadata' => [
                        'label' => trans('FLEXIContent Fields'),
                        'group' => trans('FLEXIContent'),
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::field',
                    ],
                ],
            ],
        ]);

        $source->objectType('SmartSearchItem', [
            'fields' => [
                'flexicontent' => [
                    'type' => 'ArticleFlexicontentFields',
                    'metadata' => [
                        'label' => trans('FLEXIContent Fields'),
                        'group' => trans('FLEXIContent'),
                    ],
                    'extensions' => [
                        'call' => FlexicontentFieldsType::class . '::field',
                    ],
                ],
            ],
        ]);
    }
}
