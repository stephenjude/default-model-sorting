<?php

namespace Stephenjude\DefaultModelSorting\Traits;

use Illuminate\Database\Eloquent\Builder;

trait DefaultOrderBy
{
    protected static function boot()
    {
        parent::boot();

        $column = Self::$orderByColumn;

        $direction = isset(Self::$orderByColumnDirection)
            ? Self::$orderByColumnDirection
            : config('default-model-sorting.order_by');

        static::addGlobalScope('order', function (Builder $builder) use ($column, $direction) {
            $builder->orderBy($column, $direction);
        });
    }
}
