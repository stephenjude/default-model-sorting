<?php

namespace Stephenjude\DefaultModelSorting\Tests;

use Orchestra\Testbench\TestCase;
use Stephenjude\DefaultModelSorting\DefaultModelSortingServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DefaultModelSortingServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
