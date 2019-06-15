<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PriceRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Contracts\PriceRepositoryInterface','App\Repositories\Eloquent\PriceRepository');
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
