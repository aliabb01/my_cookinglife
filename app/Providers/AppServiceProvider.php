<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
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
        if (App::environment('production')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        }
        else{
            //echo('This is a random ip address assigned, because you cannot check for ip locally');
            $ip = '45.6.65.65';
        }
        $locationData = Location::get($ip);
        View::share('locationData', $locationData);
    }
}
