<?php

namespace Exolnet\SQLiteFluentDropForeign\Tests\Integration;

use Exolnet\SQLiteFluentDropForeign\SQLiteFluentDropForeignServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            SQLiteFluentDropForeignServiceProvider::class,
        ];
    }
}
