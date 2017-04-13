<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function songs()
    {
        return $this->hasMany('App\Song');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
