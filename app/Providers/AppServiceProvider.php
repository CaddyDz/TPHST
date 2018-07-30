<?php

namespace TPHST\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TPHST\Service;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('partials.navbar_items', function($view) {
            $view->with('services', Service::all());
        });
        Blade::if('env', function ($env) {
            return app()->environment($env);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
