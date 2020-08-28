<?php

namespace Stephenjude\DefaultModelSorting\Traits;

use Illuminate\Database\Eloquent\Builder;

trait DefaultOrderBy
{
    protected static function bootDefaultOrderBy()
    {
        $column = Self::$orderByColumn;

        $direction = isset(Self::$orderByColumnDirection)
            ? Self::$orderByColumnDirection
            : config('default-model-sorting.order_by');

        static::addGlobalScope('default_order_by', function (Builder $builder) use ($column, $direction) {
            $builder->orderBy($column, $direction);
        });
    }
}
