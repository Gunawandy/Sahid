<?php

namespace Sahid\Template;

use Illuminate\Support\ServiceProvider;

class SahidTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'SahidTemplate');
        $this->publishes([__DIR__.'/public'=>public_path("sahid-template")], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
