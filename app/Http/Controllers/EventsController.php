<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Events\Event;

class EventsController extends Controller
{
    public function index(){
        $events = \App\Event::where('expired', '0')->latest('date')->get();

        //$recentEvents = Album::all();
        $recentEvents = \App\Event::where('expired', '1')->where('shown', 1)->orderBy('date', 'DESC')->get();

        return view('events.index', compact('events', 'recentEvents'));
    }

    public function show($id){
        $event = \App\Event::find($id);

        if(is_null($event)){
            abort(404);
        }

        return view('events.show', compact('event'));
    }
    public function create(){}
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}

}