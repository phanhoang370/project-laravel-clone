<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Klaravel\Ntrust\Traits\NtrustUserTrait;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use NtrustUserTrait, HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected static $roleProfile = 'user';

    protected $fillable = [
        'name', 'email', 'password', 'session',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    protected $maps = ['NAME'=>'name','EMAIL'=>'email','PASSWORD'=>'password'];

}
