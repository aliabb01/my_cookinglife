<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $userIp = request()->getHost();
        $locationData = Location::get((string)$userIp);
        //$locationData = Location::get($a);
        echo((string)$userIp);
        dd($locationData);
    }
}
