<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponser extends Model
{
    protected $table = "sponsers";
    protected $fillable = ['organisatie', 'img'];

    public function products(){
        return $this->belongsToMany('App\Event')->withTimestamps();
    }
}
