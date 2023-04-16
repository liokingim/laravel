<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // FacadeServerService
        $this->app->bind(FacadeServerService::class, function ($app) {
            return new FacadeServerService();
        });

        // cookie
        $this->app->bind(CookieReader::class, function ($app) {
            return new CookieReader($app->make(CookieFactory::class));
        });

        $this->app->bind(CookieManager::class, function ($app) {
            return new CookieManager($app->make(CookieFactory::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
