<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class challenges_closed extends Model
{
    protected $fillable = [
        'data', 'enemy_id', 'enemy_choice', 'you_choice', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
