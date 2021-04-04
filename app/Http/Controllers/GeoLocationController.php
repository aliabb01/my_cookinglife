<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use View;

class GeoLocationController extends Controller
{
    public function index(Request $request)
    {
        $locationData = Location::get();
        //dd($locationData);
        View::share('locationData', $locationData);
        return view('/welcome');
    }
}
