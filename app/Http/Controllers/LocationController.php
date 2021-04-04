<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $var = request()->ip();
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $data = Location::get($ip);
        dd($data);
    }
}
