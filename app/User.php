<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'mobile', 'date_of_birth', 'gender', 'email', 'password', 'address', 'city_name', 'state', 'zip_code', 'account_type', 'account_pin', 'account_number', 'account_bal',
    ];


    public function transfer()
    {
        return $this->hasMany('App\Transfer');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
