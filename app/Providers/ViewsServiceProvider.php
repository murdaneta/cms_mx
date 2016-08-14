<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('site.template.layout', function ($view) {
            $categories = new \App\Category;
            $view->with('bar1', $categories->where('index','bar1')->first());
            $view->with('bar2', $categories->where('index','bar2')->first());
            $view->with('bar3', $categories->where('index','bar3')->first());

        });
        view()->composer('site.template.social-media', function ($view) {
            $socials    = \App\Social::all();
            $view->with('socials', $socials);

        });
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
