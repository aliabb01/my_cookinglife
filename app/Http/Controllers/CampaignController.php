<?php

namespace App\Http\Controllers;

use App\Mail\CampaignMail;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class CampaignController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.campaign', [
            'subscribers' => $subscribers
        ]);
    }

    public function store()
    {
        $subscribers = Subscriber::all();

        if($subscribers->isEmpty()){
            return redirect()
                    ->back()
                    ->with('campaign-no-subscribers', 'Campaign email was not send as there are no subscribers');
        }

        $body = request()->validate([
            'campaignTitle' => 'required',
            'campaignMessage' => 'required',
            // 'subscribers' => 'required'
        ]);

        foreach($subscribers as $subscriber){
            Mail::to($subscriber->subscribedMail)->send(new CampaignMail($body, $subscriber));
        }

        return redirect()
                ->back()
                ->with('campaign-sent', 'Campaign Email was sent successfully!');
    }

}