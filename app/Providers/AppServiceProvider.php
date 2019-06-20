<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Location;
use App\Addon;
use Illuminate\Support\Facades\Cache;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Cache::remember('services', 1440, function () {
             
            return [
                'service 1',
                'service 2',
                'service 3',
                'service 4'
            ];
        });
        view()->composer('*',function($view){
            $view->with([
                'cached_services' => Cache::get('services')     
            ]);
        });
     
        view()->composer(['pages.prices','pages.locate-us'], function ($view) {
            $view->with([
                'locations' => Location::all(),
                'addons' => Addon::all(),
                
            ]);
        });


    }
}
