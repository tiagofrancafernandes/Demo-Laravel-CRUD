<?php

namespace App\Http\Helpers;

abstract class RouteHelper
{
    /**
     * function getNewDirection
     *
     * @param string $orderBy
     * @return string
     */
    public static function getNewDirection(string $orderBy): string
    {
        $request  = request();

        $sameOrderBy = $request->input('order-by') === $orderBy;

        $direction = $sameOrderBy && $request->input('dir') == 'desc' ? 'asc' : 'desc';

        return $request->fullUrlWithQuery([
            'order-by' => $orderBy,
            'dir' => $direction,
        ]);
    }
}
