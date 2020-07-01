<?php

namespace Stephenjude\DefaultModelSorting;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Stephenjude\DefaultModelSorting\Skeleton\SkeletonClass
 */
class DefaultModelSortingFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'default-model-sorting';
    }
}
