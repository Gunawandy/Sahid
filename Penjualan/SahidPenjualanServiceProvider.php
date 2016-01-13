<?php

namespace Sahid\Penjualan;

use Illuminate\Support\ServiceProvider;

class SahidPenjualanServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'SahidPenjualan');
        require __DIR__.'/routes.php';
    }

    public function register()
    {
        
    }
}
