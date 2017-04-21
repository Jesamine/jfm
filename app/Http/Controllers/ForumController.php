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
        return view('forum.index', compact('nextEvents'));
    }

    public function about(){
        $history_items = History::all();
        return view('forum.about', compact('history_items'));
    }

    public function team(){
        return view('forum.team');
    }
    public function contact(){
        $links = Link::all();
        return view('forum.contact', compact('links'));
    }
}
