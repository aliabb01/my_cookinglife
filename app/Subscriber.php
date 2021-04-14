<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['subscribedMail'];

    public function checkSort()
    {
        $sortQuery = request()->query('sort');

        if ($sortQuery == 'new') {
            $subscribers = Subscriber::orderBy('created_at', 'desc');
        } 
        else if ($sortQuery == 'email') {
            $subscribers = Subscriber::orderBy('subscribedMail', 'asc');
        }
        else {
            $subscribers = Subscriber::orderBy('id', 'asc');
        } 

        return $subscribers->paginate(15)->appends(request()->query());
    }
    
}
