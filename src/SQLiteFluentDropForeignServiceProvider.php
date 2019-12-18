<?php

namespace Exolnet\SQLiteFluentDropForeign;

use Illuminate\Support\ServiceProvider;

class SQLiteFluentDropForeignServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/SQLiteFluentDropForeign.php' => config_path('SQLiteFluentDropForeign.php'),
            ], 'config');

            $this->loadViewsFrom(__DIR__.'/../resources/views', 'SQLiteFluentDropForeign');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/SQLiteFluentDropForeign'),
            ], 'views');
        }*/
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'SQLiteFluentDropForeign');

        $this->app->bind('SQLiteFluentDropForeign', function () {
            return new SQLiteFluentDropForeignClass();
        });
    }
}
