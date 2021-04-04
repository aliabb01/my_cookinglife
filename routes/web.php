<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeoLocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*Route::get('/ev', 'HomeController@index')->name('welcome');*/

Route::get('/ev', function () {
    return view('welcome');
});

Route::get('elaqe', 'ContactFormController@create');

Route::post('elaqe', 'ContactFormController@store');

/* Geolocation was done in AppServiceProvider */

Route::get('get-address-from-ip',[GeoLocationController::class, 'index']);
