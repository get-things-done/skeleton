<?php

namespace UiBuilder\Modal;

use UiBuilder\Modal\Views\Modal;
use Illuminate\Support\ServiceProvider;
use UiBuilder\Modal\Views\Buttons\{Cancel, Basic};

class ModalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'modal');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'modal');
        $this->loadViewComponentsAs('',[
            'modal' => Modal::class,
            'modal.buttons.cancel' => Cancel::class,
            'modal.buttons.basic' => Basic::class,
        ]);
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('modal.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/modal'),
            ], 'views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/modal'),
            ], 'assets');*/

            // Publishing the translation files.
            $this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/modal'),
            ], 'lang');

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'modal');

        // Register the main class to use with the facade
        $this->app->singleton('modal', function () {
            return new \UiBuilder\Modal\Modal;
        });
    }
}
