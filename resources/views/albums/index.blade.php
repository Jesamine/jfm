@extends('app')

@section('content')
    <main>
        <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="intro">
                        <div class="col-sm-12">
                            <h1 class="left">Foto's</h1>
                        </div>
                    </div>

                    @if($albums->isEmpty())
                    <p>Nog geen albums zichtbaar</p>
                    @else
                    @foreach($albums as $album)
                    <a href="{{$album->fb_url}}" target="_blank" class="col-md-4 col-sm-6 "> 
                      <div class="activiteiten detail"> 
                          <div class="img" style="background-image: url('{{asset('/uploads/'.$album->event->image)}}">
                            <div class="title">{{$album->event->title}}</div>
                          </div>
                      </div> 
                    </a>
                    @endforeach
                    @endif

                    <div class="clear"></div>

                    {!! $albums->render() !!}

                    <div class="col-sm-6 center-block">
                        <a href="https://www.facebook.com/pg/Jeugdforum/photos/?tab=albums" target="_blank" class="button red center-block"> <span class="icon-fb"></span> ontdek meer op fb</a>
                    </div>

                </div>

            </div>

            @include('partials._blokken')
        </div>
        </div>
    </main>

@stop
