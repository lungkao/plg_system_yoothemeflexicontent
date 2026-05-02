<?php

namespace YOOtheme\Builder\Source\Flexicontent\Type;

use function YOOtheme\trans;

class FlexicontentValueType
{
    public static function config(): array
    {
        return [
            'fields' => [
                'value' => [
                    'type' => 'String',
                    'metadata' => [
                        'label' => trans('Value'),
                        'filters' => ['limit', 'preserve'],
                    ],
                ],
            ],
            'metadata' => [
                'label' => trans('FLEXIContent Value'),
            ],
        ];
    }
}
