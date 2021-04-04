<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        if (App::environment('production')) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else{
            echo('This is a random ip address assigned, because you cannot check for ip locally');
            $ip = '5.32.65.51';
        }
        $locationData = Location::get($ip);
        view()->share('locationData', $locationData);
        return view('/welcome');
    }
}
