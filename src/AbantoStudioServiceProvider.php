<?php

namespace Abanto\AbantoStudio;

use Illuminate\Support\ServiceProvider;
use Abanto\AbantoStudio\Commands\PublishAbantoStudio;

class AbantoStudioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        foreach (glob(__DIR__ . '/Http/Helpers/*.php') as $file) {
            require_once $file;
        }

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/route.php');
       // $this->loadRoutesFrom(__DIR__ . '/routes/breadcrumbs.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'AbantoStudio');
        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'Lang');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishAbantoStudio::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/views/AbantoStudio'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/Assets' => public_path('assets'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/Http/Controllers' => base_path('app/Http/Controllers/AbantoStudio'),
        ], 'controllers');

    }
}
