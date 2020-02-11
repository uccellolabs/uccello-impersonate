<?php

namespace Uccello\Impersonate\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * App Service Provider
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        // Views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'impersonate');

        // Translations
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'impersonate');

        // Routes
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
    }
}
