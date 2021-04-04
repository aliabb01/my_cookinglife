<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\View;

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
        // Geolocation data 
        
        
        //echo($locationData->countryName);
        //dd($locationData);
    }
}
