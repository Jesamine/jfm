@extends('app')

@section('content')
    <main role="album-detail">
        <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="intro">
                        <div class="col-sm-12 part">
                            <h1 class="left">Foto's {{$album->event->title}}</h1>
                        </div>

                        <div class="clear"></div>

                        <div id="galleria" class="{{$album->fb_album_id}}">
                        </div>

                        <div class="col-sm-12 back">
                            <a href="{{action('AlbumController@index')}}">Terug naar overzicht</a>
                        </div>
                    </div>

                </div>

                @include('partials._blokken')
            </div>
        </div>
    </main>

@stop
