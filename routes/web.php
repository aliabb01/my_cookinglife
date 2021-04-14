<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SubscribeController;
use App\Subscriber;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


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
})->name('home');

Auth::routes();

Route::get('/ev', function () {
    return view('welcome');
});

Route::get('elaqe', 'ContactFormController@create');

Route::post('elaqe', 'ContactFormController@store');

/**
 * Subscription Resource Routes
 */

/**
 * View to show unsubscribe form for mailing list
 */
Route::get('unsubscribe/{subscribedMail}', [SubscribeController::class, 'show'])->name('subscription.show');

/**
 * Subscribe to mailing list routes
 */
Route::post('subscribe', [SubscribeController::class, 'store'])->name('subscription.store');

/**
 * Unsubscribe from mailing list
 */
Route::delete('unsubscribe/{subscribedMail}', [SubscribeController::class, 'destroy'])->name('subscription.destroy');



/**
 * Admin Routes
 */
Route::middleware(['auth'])->group(function () {

    Route::get('admin', function () {

        // Total subscribers (Share the view with only this view)
        view()->composer(['admin.dashboard'], function ($view) {
            $totalSubscribers = Subscriber::get()->count();
            $view->with('totalSubscribers', $totalSubscribers);
        });

        return view('admin.dashboard');
    });

    Route::get('subscribers', [AdminController::class, 'index'])->name('admin.index');

    Route::delete('admin/unsubscribe/{subscribedMail}', [AdminController::class, 'destroy'])->name('admin.destroy');

    Route::delete('subscribers/deleteAll', [AdminController::class, 'deleteAll'])->name('admin.deleteAll');

    Route::get('campaign', [CampaignController::class, 'index']);

    Route::post('campaign', [CampaignController::class, 'store'])->name('campaign.store');
});


/**
 * Run artisan commands from a link button
 */
Route::get('/commands', function () {
    Artisan::call('migrate:refresh');
    return redirect()->back();
});
