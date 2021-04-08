<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactFormController extends Controller
{
    //

    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        
        // Validation on Backend
        $data = request()->validate([
            'senderName' => 'required|min:3|max:30',
            'senderEmailName' => 'required|email|max:40',
            'senderText' => 'required|min:10|max:255',
        ]);
        
        // Send an email
        Mail::to('mycookinglifecontact@gmail.com')->send(new ContactFormMail($data));
        
        return redirect()->back()->with('elaqe', 'Yazdığınız ismarıc müvəffəqiyyətlə göndərildi.');
        
    }
}
