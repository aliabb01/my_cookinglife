<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class GeoLocationController extends Controller
{
    public function index(Request $request)
    {
        $locationData = Location::get();
        $userIP = $request->ip();
        $locationData->ip = $request->ip();   
        dd($locationData);
    }
}
