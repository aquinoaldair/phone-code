<?php

namespace Aquinoaldair\PhoneCode;

use Illuminate\Support\ServiceProvider;

class PhoneCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('phone-code.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'phone-code');

        // Register the main class to use with the facade
        $this->app->singleton('phone-code', function () {
            return new PhoneCode;
        });
    }
}
