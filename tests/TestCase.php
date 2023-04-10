<?php

namespace Milwad\LaravelMedia\Tests;

use Milwad\LaravelMedia\LaravelMediaServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelMediaServiceProvider::class,
        ];
    }
}