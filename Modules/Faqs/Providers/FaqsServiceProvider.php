<?php

namespace Modules\Faqs\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Observers\FileObserver;
use Modules\Core\Observers\SlugObserver;
use Modules\Faqs\Entities\Faq;
use Modules\Faqs\Repositories\EloquentFaq;

class FaqsServiceProvider extends ServiceProvider
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
            'Faqs',
            'Modules\Faqs\Facades\Facade'
        );

        /*Faq::observe(new SlugObserver());
        Faq::observe(new FileObserver());*/

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Modules\Faqs\Repositories\FaqInterface', function (Application $app) {
            $repository = new EloquentFaq(new Faq);
            return $repository;
        });

        $app->view->composer('faqs::public.*', function ($view) {
            $view->page = \MyApp::getPageLinkedToModule('faqs');
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
            __DIR__.'/../Config/config.php' => config_path('faqs.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'faqs'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/faqs');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/faqs';
        }, \Config::get('view.paths')), [$sourcePath]), 'faqs');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/faqs');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'faqs');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'faqs');
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
