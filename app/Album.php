<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = ['album_id', 'event_id'];

    public function event(){
      return $this->belongsTo('App\Event', 'id');
    }
}
