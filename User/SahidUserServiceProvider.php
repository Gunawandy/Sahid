<?php

namespace Sahid\User;

use Illuminate\Support\ServiceProvider;

class SahidUserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'SahidUser');
        require __DIR__.'/routes.php';
    }

    public function register()
    {

    }
}
