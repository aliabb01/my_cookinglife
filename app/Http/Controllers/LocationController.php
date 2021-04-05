<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\View;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        
        return view('welcome');
    }
}
