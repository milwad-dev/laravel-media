<?php

namespace Milwad\LaravelMedia\Tests;

use Milwad\LaravelMedia\LaravelMediaServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
//        return [
//            LaravelMediaServiceProvider::class,
//        ];
    }
}