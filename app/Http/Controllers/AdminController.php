<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class AdminController extends Controller
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

    public function destroy($subscribedMail)
    {
        Subscriber::where('subscribedMail', $subscribedMail)->delete();
        return redirect()->back();
    }  

    public function deleteAll()
    {
        Subscriber::truncate();
        return redirect()
            ->back()
            ->with('deletedAll', 'Abunələr tamamilə silinmişdir!');
    }
}
