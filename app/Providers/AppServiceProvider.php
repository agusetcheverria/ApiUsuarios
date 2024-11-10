<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
{
    $this->app->singleton('files', function () {
        return new \Illuminate\Filesystem\Filesystem;
    });

    $this->app->singleton('cache.store', function ($app) {
        return $app['cache']->driver();
    });
}


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
