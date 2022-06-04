<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('nav', function ($view) {
            $view->with('items', [
                '/book' => 'Home',
                '/book/create' => 'Create',
                '' => 'Contact'
            ]);
        });
        View::composer('footer', function ($view) {
            $view->with('footer', 'Book');
        });
    }
}
