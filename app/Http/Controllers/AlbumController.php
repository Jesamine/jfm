<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::paginate(9);
        return view('albums.index', compact('albums'));
    }

    public function show($id){
        $album = \App\Album::find($id);

        if(is_null($album)){
            return redirect()->action('ForumController@index')->with('status', 'Er is een fout gebeurd');
        }else{
            return view('albums.show', compact('album'));
        }
    }
    public function create(){}
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
