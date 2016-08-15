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
        view()->composer('site.home.layout', function ($view) {
            $categories = new \App\Category;
            $view->with('nd1', $categories->where('index','nd1')->first());
            $view->with('nd2', $categories->where('index','nd2')->first());
            $view->with('nd3', $categories->where('index','nd3')->first());
            $view->with('nd4', $categories->where('index','nd4')->first());
            $view->with('nd5', $categories->where('index','nd5')->first());
            $view->with('nd6', $categories->where('index','nd6')->first());
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
