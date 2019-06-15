<?php

namespace App\Http\Controllers;

use App\History;
use App\Link;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Events\Event;

class ForumController extends Controller
{
    public function index(){
        //Home pagina
        $nextEvents = \App\Event::where('expired', '0')->where('shown', '1')->orderBy('date', 'ASC')->take(2)->get();

        $tomoereland = \App\Event::find(32);

        $date = strtotime($tomoereland->date);
        $date = strtotime("+7 day", $date);

        if(date('Y-m-d h:i:s', $date) > date('Y-m-d h:i:s')){
          $popup = $tomoereland;
          $headsponsers = $tomoereland->sponsers()->orderBy('event_sponser.sequence', 'asc')->limit(9)->get();
        }else{
          $popup = false;
        }
        return view('forum.index', compact('nextEvents', 'popup', 'headsponsers'));
    }

    public function about(){
        $history_items = History::all();
        $popup = false;
        return view('forum.about', compact('history_items', 'popup'));
    }

    public function team(){
      $popup = false;
      return view('forum.team', compact('popup'));
    }
    public function contact(){
      $links = Link::all();
      $popup = false;
      return view('forum.contact', compact('links', 'popup'));
    }
}
