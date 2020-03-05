<?php

namespace Modules\Countries\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Database\Eloquent\Factory;
use Modules\Core\Observers\FileObserver;
use Modules\Core\Observers\SlugObserver;
use Modules\Countries\Entities\Country;
use Modules\Countries\Repositories\EloquentCountry;

class CountriesServiceProvider extends ServiceProvider
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
            'Countries',
            'Modules\Countries\Facades\Facade'
        );

        /*Country::observe(new SlugObserver());
        Country::observe(new FileObserver());*/

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $app = $this->app;

        $app->bind('Modules\Countries\Repositories\CountryInterface', function (Application $app) {
            $repository = new EloquentCountry(new Country);
            return $repository;
        });

        /*$app->view->composer('countries::public.*', function ($view) {
            $view->page = \MyApp::getPageLinkedToModule('countries');
        });*/
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('countries.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'countries'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/countries');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/countries';
        }, \Config::get('view.paths')), [$sourcePath]), 'countries');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/countries');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'countries');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'countries');
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
