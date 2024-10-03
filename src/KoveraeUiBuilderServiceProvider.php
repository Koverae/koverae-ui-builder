<?php

namespace Koverae\KoveraeUiBuilder;

use Illuminate\Support\ServiceProvider;
use Koverae\KoveraeUiBuilder\Commands\MakeCartCommand;
use Koverae\KoveraeUiBuilder\Commands\MakeFormCommand;
use Koverae\KoveraeUiBuilder\Commands\MakeTableCommand;
use Koverae\KoveraeUiBuilder\Commands\ModuleMakeCommand;
use Koverae\KoveraeUiBuilder\Commands\PackageInstallMessageCommand;

class KoveraeUiBuilderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'koverae-ui-builder');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'koverae-ui-builder');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('koverae-ui-builder.php'),
            ], 'config');

            // Publishing the views.
            // $this->publishes([
            //     __DIR__.'/../resources/views' => resource_path('views/vendor/koverae-ui-builder'),
            // ], 'views');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/koverae-ui-builder'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/koverae-ui-builder'),
            ], 'lang');*/

            // Registering package commands.
            $this->commands([
                MakeFormCommand::class,
                ModuleMakeCommand::class,
                MakeTableCommand::class,
                MakeCartCommand::class,
                PackageInstallMessageCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'koverae-ui-builder');

        // Register the main class to use with the facade
        // $this->app->singleton('koverae-ui-builder', function () {
        //     return new KoveraeUiBuilder;
        // });
    }
}
