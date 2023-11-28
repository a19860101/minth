<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Illuminate\Http\Request;
use Laravel\Nova\Dashboards\Main;
// use Laravel\Nova\Menu\Menu;
// use Laravel\Nova\Menu\MenuGroup;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;

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
        Nova::mainMenu(function (Request $request) {
            return [
                // MenuSection::dashboard(Main::class)->icon('chart-bar'),
                MenuSection::make('分類')->path('/resources/categories')->icon('cube'),
                MenuSection::make('文章')->path('/resources/posts')->icon('cube'),
                MenuSection::make('連結')->path('/resources/links')->icon('cube'),
                MenuSection::make('使用者')->path('/resources/users')->icon('cube'),
                // MenuSection::make('推薦管理', [
                    // MenuItem::link('標題','/resources/link-titles'),
                    // MenuItem::link('連結','/resources/links'),
                // ])->icon('link')->collapsable(),
                // MenuSection::make('拍攝需知')->path('/resources/notices')->icon('question-mark-circle'),

            ];
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
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
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
