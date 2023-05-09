<?php

namespace Milwad\LaravelMedia;

use Illuminate\Support\ServiceProvider;
use Milwad\LaravelMedia\Services\ImageService;

class LaravelMediaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-media.php', 'laravel-media');
    }

    public function boot()
    {
        $this->app->bind('image-service', function () {
            return new ImageService;
        });
    }
}