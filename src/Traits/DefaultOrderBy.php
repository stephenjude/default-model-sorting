<?php

namespace stephenjude\Traits;

use Illuminate\Database\Eloquent\Builder;

trait DefaultOrderBy
{
    protected static function boot()
    {
        $column = Self::$orderByColumn;

        $direction = Self::$orderByDirection ?: 'asc';

        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) use ($column, $direction) {
            $builder->orderBy($column, $direction);
        });
    }
}
