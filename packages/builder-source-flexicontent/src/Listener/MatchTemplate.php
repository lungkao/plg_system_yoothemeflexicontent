<?php

namespace YOOtheme\Builder\Source\Flexicontent\Listener;

use Joomla\CMS\Document\Document;
use Joomla\CMS\Factory;
use Joomla\Database\DatabaseDriver;
use YOOtheme\Theme\Joomla\LoadTemplateEvent;

class MatchTemplate
{
    public string $language;
    protected DatabaseDriver $db;

    public function __construct(?Document $document, DatabaseDriver $db)
    {
        $this->language = $document->language ?? 'en-gb';
        $this->db = $db;
    }

    /**
     * @param LoadTemplateEvent $event
     */
    public function handle($event): ?array
    {
        if ($event->getTpl() || Factory::getApplication()->getInput()->getCmd('option') !== 'com_flexicontent') {
            return null;
        }

        $view = $event->getView();
        $name = method_exists($view, 'getName') ? $view->getName() : '';

        if ($name === 'item') {
            $item = $view->get('item');

            if (!$item) {
                return null;
            }

            $categoryIds = array_unique(
                array_filter(
                    array_merge(
                        [(int) ($item->catid ?? 0)],
                        array_map(
                            'intval',
                            array_column((array) ($item->cats ?? []), 'id'),
                        ),
                    ),
                ),
            );

            return [
                'type' => 'com_flexicontent.item',
                'query' => [
                    'catid' => fn($ids, $query) => $this->matchCategories(
                        $categoryIds,
                        $ids,
                        $query['include_child_categories'] ?? false,
                    ),
                    'lang' => $this->language,
                ],
                'params' => ['item' => $item],
            ];
        }

        if ($name === 'category') {
            $category = $view->get('category');
            $pagination = $view->get('pagination');

            if (!$category) {
                return null;
            }

            return [
                'type' => 'com_flexicontent.category',
                'query' => [
                    'catid' => fn($ids, $query) => $this->matchCategories(
                        [(int) ($category->id ?? $category)],
                        $ids,
                        $query['include_child_categories'] ?? false,
                    ),
                    'pages' => !$pagination || $pagination->pagesCurrent === 1 ? 'first' : 'except_first',
                    'lang' => $this->language,
                ],
                'params' => [
                    'category' => $category,
                    'items' => array_merge(
                        (array) $view->get('lead_items'),
                        (array) $view->get('intro_items'),
                    ),
                    'pagination' => $pagination,
                ],
            ];
        }

        return null;
    }

    protected function matchCategories(array $currentCategoryIds, array $categoryIds, $includeChildren): bool
    {
        $categoryIds = array_map('intval', $categoryIds);
        $currentCategoryIds = array_values(array_filter(array_map('intval', $currentCategoryIds)));
        $match = (bool) array_intersect($currentCategoryIds, $categoryIds);

        if (!$includeChildren || ($match && $includeChildren === 'include')) {
            return $match;
        }

        if ($match && $includeChildren === 'only') {
            return false;
        }

        if (!$currentCategoryIds || !$categoryIds) {
            return false;
        }

        $query = $this->db->getQuery(true)
            ->select('1')
            ->from($this->db->quoteName('#__categories', 'child'))
            ->innerJoin(
                $this->db->quoteName('#__categories', 'parent') .
                    ' ON child.lft > parent.lft AND child.rgt < parent.rgt',
            )
            ->where('child.id IN (' . implode(',', $currentCategoryIds) . ')')
            ->where('parent.id IN (' . implode(',', $categoryIds) . ')')
            ->setLimit(1);

        try {
            return (bool) $this->db->setQuery($query)->loadResult();
        } catch (\Throwable $e) {
            return false;
        }
    }
}
