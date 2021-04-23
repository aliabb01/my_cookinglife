<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SubscribeController;
use App\Subscriber;
use Carbon\Carbon;
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

Route::get('elaqe', 'ContactFormController@create');

Route::post('elaqe', 'ContactFormController@store');

Route::get('/haqqimizda', function () {
    return view('about-us');
})->name('page.about-us');

/**
 * Subscription Resource Routes
 */

// view to show unsubscribe form for mailing list
Route::get('unsubscribe/{subscribedMail}', [SubscribeController::class, 'show'])->name('subscription.show');

// subscribe to mailing list
Route::post('subscribe', [SubscribeController::class, 'store'])->name('subscription.store');

// unsubscribe from mailing list
Route::delete('unsubscribe/{subscribedMail}', [SubscribeController::class, 'destroy'])->name('subscription.destroy');



/**
 * Admin Routes
 */
Route::middleware(['auth'])->group(function () {

    Route::get('admin', function () {

        // Total subscribers (Share the view with only this view)
        // New subscribers (Subscribed within past 5 hours)
        view()->composer(['admin.dashboard'], function ($view) {
            $totalSubscribers = Subscriber::get()->count();
            $newSubsribersCount = Subscriber::where('created_at','>', Carbon::now()->subHours(5));
            $view->with('totalSubscribers', $totalSubscribers)
                    ->with('newSubCount', $newSubsribersCount->count() );
        });

        return view('admin.dashboard');
    });

    // get all subscribers as admin
    Route::get('subscribers', [SubscribeController::class, 'index'])->name('admin.subscriber.index');

    // delete a subscriber as admin
    Route::delete('admin/unsubscribe/{subscribedMail}', [SubscribeController::class, 'destroy'])->name('admin.subscriber.destroy');

    // delete all subscribers as admin
    Route::delete('subscribers/deleteAll', [SubscribeController::class, 'deleteAll'])->name('admin.subscriber.deleteAll');

    Route::get('campaign', [CampaignController::class, 'index']);

    Route::post('campaign', [CampaignController::class, 'store'])->name('campaign.store');

    // show view to edit admin information form
    Route::get('/profile/@{user:name}', [AdminController::class, 'edit'])->name('admin.profile');

    // update user profile PATCH
    Route::patch('/profile/@{user:name}', [AdminController::class, 'update'])->name('admin.profile.update');

    // show operations page
    Route::get('operations', function () {
        return view('admin.operations');
    })->name('admin.operations');

    /**
     * Admin Commands (operation page)
     */

    // run artisan command to refresh all migrations
    Route::get('/refresh-all', function () {
        Artisan::call('migrate:refresh');
        return redirect()->back();
    })->name('operations.refresh-all');

    // delete current signed in profile
    Route::get('/delete-profile', [AdminController::class, 'destroy'])->name('admin.destroy');

    // delete all profiles
    Route::get('/delete-all-admins', [AdminController::class, 'deleteAll'])->name('admin.deleteAll');

    // add fake subscribers
    Route::get('/add-fake-subscribers', function () {
        Artisan::call('db:seed --class=SubscriberSeeder');
        return redirect()->back();
    })->name('operations.add-fake-subs');
});
