<?php

namespace Sahid\Home;

use Illuminate\Support\ServiceProvider;

class SahidHomeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__.'/routes.php'; 
        $this->loadViewsFrom(__DIR__.'/resources/views', "SahidHome");
    }
}
