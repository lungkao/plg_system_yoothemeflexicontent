<?php

namespace YOOtheme\Builder\Source\Flexicontent;

use Joomla\CMS\User\User;
use Joomla\Database\DatabaseDriver;
use YOOtheme\Http\Request;
use YOOtheme\Http\Response;

class SourceController
{
    public static function items(
        Request $request,
        Response $response,
        DatabaseDriver $db,
        User $user
    ): Response {
        $ids = implode(',', array_map('intval', (array) $request->getQueryParam('ids')));
        $groups = implode(',', array_map('intval', $user->getAuthorisedViewLevels()));
        $titles = [];

        if ($ids !== '') {
            $query = "SELECT id, title
                FROM #__content
                WHERE id IN ({$ids})
                AND access IN ({$groups})";

            $titles = $db->setQuery($query)->loadAssocList('id', 'title');
        }

        return $response->withJson((object) $titles);
    }
}
