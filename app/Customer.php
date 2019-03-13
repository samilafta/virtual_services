<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{

    protected $guard = 'customer';

    protected $fillable = [
        'name', 'email', 'phone_number', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
