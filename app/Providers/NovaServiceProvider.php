<?php

namespace TPHST\Providers;

use TPHST\Article;
use Laravel\Nova\Nova;
use Beyondcode\TinkerTool\Tinker;
use Illuminate\Support\Facades\Gate;
use TPHST\Observers\ArticleObserver;
use Laravel\Nova\NovaApplicationServiceProvider;
use Dniccum\CustomEmailSender\CustomEmailSender;
use Zoxta\NovaCloudflareCard\NovaCloudflareCard;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Nova::serving(function () {
            Article::observe(ArticleObserver::class);
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'dg@sarltphst.com',
                'webmaster@sarltphst.com',
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new NovaCloudflareCard(),
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new Tinker(),
            new CustomEmailSender(),
        ];
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
