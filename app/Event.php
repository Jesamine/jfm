<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = ['date', 'location', 'title', 'intro', 'description', 'image', 'fb_link', 'expired', 'shown', 'random'];

    public function album(){
        return $this->hasMany('App\Album');
    }

    public function sponsers(){
        return $this->belongsToMany('App\Sponser')->withTimestamps();
    }
}
