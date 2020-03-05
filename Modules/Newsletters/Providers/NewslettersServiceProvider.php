<?php

namespace Modules\Newsletters\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Observers\FileObserver;
use Modules\Core\Observers\SlugObserver;
use Modules\Newsletters\Entities\Newsletter;
use Modules\Newsletters\Repositories\EloquentNewsletter;

class NewslettersServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        AliasLoader::getInstance()->alias(
            'Newsletters',
            'Modules\Newsletters\Facades\Facade'
        );

        /*Newsletter::observe(new SlugObserver());*/
        Newsletter::observe(new FileObserver());

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Modules\Newsletters\Repositories\NewsletterInterface', function (Application $app) {
            $repository = new EloquentNewsletter(new Newsletter);
            return $repository;
        });

        $app->view->composer('newsletters::public.*', function ($view) {
            $view->page = \MyApp::getPageLinkedToModule('newsletters');
        });
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('newsletters.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'newsletters'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/newsletters');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/newsletters';
        }, \Config::get('view.paths')), [$sourcePath]), 'newsletters');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/newsletters');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'newsletters');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'newsletters');
        }
    }

    /**
     * Register an additional directory of factories.
     * 
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
