@extends('app')
@section('content')
    <main>
        <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="intro">
                        <div class="activiteiten detail_act">
                            <div class="col-sm-1">
                                <div class="row">
                                    <div class="datum">
                                        <div><?php echo date_format( new DateTime($event['date']), 'd/m' );?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 part">
                                <div class="row">
                                    <h2>{{$event->title}}</h2>
                                    <ul class="extrainfo">
                                        <li><span class="icon-clock"></span><?php echo date_format( new DateTime($event['date']), 'H:i' );?></li>
                                        <li><span class="icon-map"></span> {{$event->location}}</li>
                                    </ul>
                                    {!! $event->description !!}

                                    @if(!empty($event['fb_link']))
                                    <a class="button red" href="https://www.facebook.com/events/{{$event->fb_link}}" target="_blank"><span class="icon-fb"></span>check evenement op fb</a>
                                    @endif
                                </div>
                            </div>


                            <div class="col-sm-5">
                                @if(!empty($event['fb_link']))
                                <a href="https://www.facebook.com/events/{{$event->fb_link}}" target="_blank">
                                    <img src="{{asset('uploads/'.$event->image)}}" alt="">
                                </a>
                                @else
                                <img src="{{$event->image}}" alt="">
                                @endif
                            </div>

                            <div class="col-sm-12 back">
                                <a href="{{action('EventsController@index')}}">Terug naar overzicht</a>
                            </div>
                        </div>
                    </div>
                </div>

                @unless($event->sponsers->isEmpty())
                <div class="container-fluid history" id="event_sponsers">
                    <h1 class="center">Sponsors</h1>
                    <div class="customNavigation">
                        <a class="icon-left prev"></a>
                        <a class="icon-right next"></a>
                    </div>

                    <div class="container">

                        <div id="slide-links" class="owl-carousel owl-theme">
                          <?php
                            if($event->random == 1){
                              $sponsers = iterator_to_array($event->sponsers);
                              shuffle($sponsers);
                            }else{
                              $sponsers = $event->sponsers()->orderBy('event_sponser.sequence', 'asc')->get();
                            }
                          ;?>
                            @foreach($sponsers as $sponser)
                                @if($sponser->image == '')
                                    <div>{{$sponser->organisatie}}</div>
                                @else
                                    <img src="{{asset('uploads/'.$sponser->image)}}" alt="">
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                @endunless

                @include('partials._blokken')

            </div>
        </div>
    </main>
@stop
