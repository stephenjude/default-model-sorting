<?php

namespace Stephenjude\DefaultModelSorting;

use Illuminate\Support\Facades\Facade;


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
