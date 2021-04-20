<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'privilige'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function returnPrivilege()
    {
        $privilege = 'privileges.low';
        if(auth()->user()->privilege==2)
        {
            $privilege = 'privileges.intermediate';            
        }
        else if(auth()->user()->privilege==1)
        {
            $privilege = 'privileges.advanced';  
        }

        return $privilege;       
    }

    public function privilegeInWords()
    {
        $privilege = auth()->user()->privilege;
        $privilegeInWords = ($privilege==1) ? 'Advanced' : (($privilege==2) ? 'Intermediate' : 'Basic');
        return $privilegeInWords;
    }

    
}
