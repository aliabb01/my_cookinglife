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
        $userIP = request()->ip();
        $locationData = Location::get($userIP);
        View::share('locationData', $locationData); 
        //echo($locationData->countryName);
        dd($locationData);
    }
}
