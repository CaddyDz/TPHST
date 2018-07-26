<?php

namespace TPHST\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use TPHST\Service;

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
