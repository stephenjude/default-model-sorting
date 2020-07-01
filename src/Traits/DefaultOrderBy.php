<?php

namespace Stephenjude\Traits;

use Illuminate\Database\Eloquent\Builder;

trait DefaultOrderBy
{
    protected static function boot()
    {
        $column = Self::$orderByColumn;

        $direction = isset(Self::$orderByDirection)
            ? Self::$orderByDirection
            : config('order_by');

        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) use ($column, $direction) {
            $builder->orderBy($column, $direction);
        });
    }
}
