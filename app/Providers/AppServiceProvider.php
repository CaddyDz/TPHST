<?php

namespace TPHST\Providers;

use TPHST\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['partials.navbar_items', 'services.services_showcase'], function($view) {
            $view->with('services', Service::all());
        });
        Blade::if('env', function ($env) {
            return app()->environment($env);
        });
    }
}
