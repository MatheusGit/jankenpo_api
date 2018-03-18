<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class challenges_sent extends Model
{
    protected $fillable = [
        'data', 'enemy_id', 'you_choice', 'user_id'
    ];
   
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    
}
