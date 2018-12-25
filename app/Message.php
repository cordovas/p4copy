<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
