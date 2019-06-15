<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Events\Event;

class EventsController extends Controller
{
    public function index(){
        $events = \App\Event::where('expired', '0')
        ->where('shown', '1')
        ->orderBy('date', 'asc')->get();

        //$recentEvents = Album::all();
        $recentEvents = \App\Event::where('expired', '1')->where('shown', 1)->orderBy('date', 'DESC')->get();

        $popup = false;

        return view('events.index', compact('events', 'recentEvents', 'popup'));
    }

    public function show($id){
        $event = \App\Event::find($id);

        $popup = false;

        if(is_null($event)){
            abort(404);
        }

        return view('events.show', compact('event', 'popup'));
    }
    public function create(){}
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}

}
