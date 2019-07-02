<?php

namespace TPHST\Providers;

use TPHST\Article;
use TPHST\Service;
use TPHST\Project;
use TPHST\Testimony;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer([
            'layouts.header.navbar_items',
            'services.services_showcase',
            'layouts.footer.services',
            'partials.services',
        ], function ($view) {
            $view->with('services', Service::all());
        });
        view()->composer('layouts.footer.recent_posts', function ($view) {
            $view->with('recent_articles', Article::latest()->take(2)->get());
        });
        view()->composer(['partials.blog', 'layouts.header.navbar_items'], function ($view) {
            $view->with('articles', Article::latest()->take(6)->get());
        });
        view()->composer('layouts.header.navbar_items', function ($view) {
            $view->with('projects', Project::latest()->take(6)->get());
        });
        view()->composer('partials.testimonies', function ($view) {
            $view->with('testimonies', Testimony::all());
        });
    }
}
