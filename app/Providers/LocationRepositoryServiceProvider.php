<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class LocationRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    
        $this->app->bind('App\Repositories\Contracts\LocationRepositoryInterface','App\Repositories\Eloquent\LocationRepository');
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
