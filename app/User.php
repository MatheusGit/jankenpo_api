<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'nickname', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function challenges_sent()
    {
        return $this->hasMany('App\challenges_sent');
    }

    public function challenges_received()
    {
        return $this->hasMany('App\challenges_received');
    }

    public function challenges_closed()
    {
        return $this->hasMany('App\challenges_closed');
    }
}
