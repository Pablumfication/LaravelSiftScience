<?php

namespace Pablumfication\LaravelSiftScience;

use Illuminate\Support\ServiceProvider;

class LaravelSiftScienceServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('LaravelSiftScience', \Pablumfication\LaravelSiftScience\SiftScienceService::class);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-sift-science.php',
            'laravel-sift-science'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return  [];
    }
}
