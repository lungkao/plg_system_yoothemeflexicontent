<?php

namespace YOOtheme\Builder\Source\Flexicontent\Listener;

use Joomla\CMS\Router\SiteRouter;
use YOOtheme\Builder\Source\Flexicontent\Type\FlexicontentFieldsType;

class LoadTemplateUrl
{
    public SiteRouter $router;

    public function __construct(SiteRouter $router)
    {
        $this->router = $router;
    }

    public function handle(array $template): array
    {
        if (!in_array($template['type'] ?? '', ['com_flexicontent.item', 'com_flexicontent.category'], true)) {
            return $template;
        }

        if (!static::loadRouteHelper()) {
            return $template;
        }

        try {
            $url = match ($template['type']) {
                'com_flexicontent.item' => $this->getItemUrl($template),
                'com_flexicontent.category' => $this->getCategoryUrl($template),
                default => '',
            };

            if ($url) {
                $template['url'] = (string) $this->router->build($url);
            }
        } catch (\Throwable $e) {
            return $template;
        }

        return $template;
    }

    protected function getItemUrl(array $template): string
    {
        $items = FlexicontentFieldsType::queryItems(($template['query'] ?? []) + ['limit' => 1]);

        if (!$items) {
            return '';
        }

        $item = $items[0];

        return \FlexicontentHelperRoute::getItemRoute((int) $item->id, (int) $item->catid);
    }

    protected function getCategoryUrl(array $template): string
    {
        $catids = array_values(array_filter(array_map('intval', (array) ($template['query']['catid'] ?? []))));

        if (!$catids) {
            $catids = FlexicontentFieldsType::getCategoryIds(1);
        }

        if (
            isset($catids[0]) &&
            ($template['query']['include_child_categories'] ?? false) === 'only'
        ) {
            $catids = FlexicontentFieldsType::getCategoryIds(1, $catids);
        }

        return isset($catids[0]) ? \FlexicontentHelperRoute::getCategoryRoute((int) $catids[0]) : '';
    }

    protected static function loadRouteHelper(): bool
    {
        $files = [
            JPATH_ADMINISTRATOR . '/components/com_flexicontent/defineconstants.php',
            JPATH_SITE . '/components/com_flexicontent/helpers/route.php',
        ];

        foreach ($files as $file) {
            if (is_file($file)) {
                require_once $file;
            }
        }

        return class_exists('FlexicontentHelperRoute');
    }
}
