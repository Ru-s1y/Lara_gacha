<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\GachaService;

class GachaProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            'GachaService',
            'App\Services\GachaService'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
