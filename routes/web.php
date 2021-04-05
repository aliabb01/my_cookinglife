<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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

Route::get('/', [LocationController::class, 'index']);

Auth::routes();

/*Route::get('/ev', 'HomeController@index')->name('welcome');*/

Route::get('/ev', function () {
    return view('welcome');
});

Route::get('elaqe', 'ContactFormController@create');

Route::post('elaqe', 'ContactFormController@store');


//Route::get('sud', [LocationController::class, 'index']);

