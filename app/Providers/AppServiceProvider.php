<?php

namespace TPHST\Providers;

use TPHST\Article;
use TPHST\Service;
use TPHST\Testimony;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use TPHST\Project;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer([
            'partials.navbar_items',
            'services.services_showcase',
            'layouts.footer.services',
            'partials.services'
        ], function ($view) {
            $view->with('services', Service::all());
        });
        View::composer('layouts.footer.recent_posts', function ($view) {
            $view->with('recent_articles', Article::latest()->take(2)->get());
        });
        View::composer('partials.blog', function ($view) {
            $view->with('articles', Article::latest()->take(6)->get());
        });
        View::composer('partials.testimonies', function ($view) {
            $view->with('testimonies', Testimony::all());
        });
        Blade::if('env', function ($env) {
            return app()->environment($env);
        });
    }
}
