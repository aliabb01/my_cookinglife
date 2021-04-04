<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $ip = $request->getClientIp();
        $data = Location::get($ip);
        dd($data);
    }
}
