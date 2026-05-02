<?php

namespace YOOtheme\Builder\Source\Flexicontent;

include_once __DIR__ . '/src/Listener/LoadSourceTypes.php';
include_once __DIR__ . '/src/Listener/LoadBuilderConfig.php';
include_once __DIR__ . '/src/Listener/MatchTemplate.php';
include_once __DIR__ . '/src/Listener/LoadTemplateUrl.php';
include_once __DIR__ . '/src/SourceController.php';
include_once __DIR__ . '/src/Type/FlexicontentFieldsType.php';
include_once __DIR__ . '/src/Type/FlexicontentValueType.php';

return [
    'routes' => [
        ['get', '/flexicontent/items', [SourceController::class, 'items']],
    ],

    'events' => [
        'source.init' => [
            Listener\LoadSourceTypes::class => ['handle', -20],
        ],
        \YOOtheme\Builder\BuilderConfig::class => [
            Listener\LoadBuilderConfig::class => ['handle', -10],
        ],
        'builder.template' => [
            Listener\MatchTemplate::class => ['@handle', 20],
        ],
        'builder.template.load' => [
            Listener\LoadTemplateUrl::class => ['@handle', 20],
        ],
    ],
];
