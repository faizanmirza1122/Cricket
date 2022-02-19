<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Main;
use  Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view) {
            $view->with('logo', Main::first());
        });
        Schema::defaultStringLength(191);
    }
}
