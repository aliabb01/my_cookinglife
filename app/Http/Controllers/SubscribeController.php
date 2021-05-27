<?php

namespace App\Http\Controllers;

use App\Mail\SubscribeNotificationMail;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class SubscribeController extends Controller
{
    public function index()
    {
        // dd(request()->query('sort') == 'new');   
        $subscribers = new Subscriber;
        $subscribers = $subscribers->checkSort();      

        return view('admin.subscribers', [
            'subscribers' => $subscribers
        ]);
    }

    public function show($subscribedMail)
    {
        return view('unsubscribe', ['subscribedMail' => $subscribedMail]);
    }

    public function store()
    {
        $subscriberData = request()->validate([
            'subscribedMail' => 'required|email|max:40',
        ]);

        $subscriber = Subscriber::firstOrCreate($subscriberData);

        // $subscriber->save()  no need to save as we have firstOrCreate method

        // check if subscriber was created or found from database. If created then send him an email. Otherwise tell him it is a duplicate

        if ($subscriber->wasRecentlyCreated) {
            Mail::to($subscriber->subscribedMail)->send(new SubscribeNotificationMail($subscriberData));

            return redirect()
                ->back()
                ->with('subscribed', 'E-poçt ünvanınız e-poçt siyahımıza abunə olundu.');
        } else {
            return redirect()
                ->back()
                ->with('subscribeDuplicate', 'Yazdığınız e-poçt siyahımıza abunədir!');
        }
    }

    public function destroy($subscribedMail)
    {
        Subscriber::where('subscribedMail', $subscribedMail)->delete();

        // check if it is logged in / admin
        if(Auth::check())
        {
            return redirect()->back()->with('unsubscribed-by-admin', 'You successfully unsubscribed '. $subscribedMail.' from mailing list');
        }

        return redirect()
            ->route('home')
            ->with('unsubscribed', 'Abunəliyiniz müvəffəqiyyətlə ləğv olunmuşdur!');
    }
    
    public function deleteAll()
    {
        Subscriber::truncate();
        return redirect()
            ->back()
            ->with('deletedAll', 'Abunələr tamamilə silinmişdir!');
    }
}
