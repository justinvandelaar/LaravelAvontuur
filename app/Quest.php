<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    public $timestamps = false;
    public function checkQuest()
    {
        return $this->hasMany('App\UserQuest', 'player_id');
    }
}
