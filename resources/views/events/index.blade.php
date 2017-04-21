@extends('app')

@section('content')
    <main>
        <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="intro">
                        <div class="col-sm-12">
                            <h1 class="left">Agenda overzicht</h1>
                        </div>

                        <div class="clear"></div>
                        <div class="activiteiten">
                            @if($events->isEmpty())
                            <div class="col-xs-12">
                                <p>Momenteel zijn er geen aankomende evenementen</p>
                            </div>
                            @else
                                @foreach($events as $event)
                                <div class="col-md-5 col-md-offset-1 col-xs-12 activiteit" data-equal-height="agenda-list">
                                    <div class="col-md-4 col-xs-3">
                                        <div class="row">
                                            <div class="datum">
                                                <div><?php echo date_format( new DateTime($event['date']), 'd/m' );?></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-xs-offset-3">
                                        <div class="row">
                                            <h2>{{$event->title}}</h2>
                                            <p class="intro_act">{{$event->intro}}</p>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="row">
                                                    <a class="button border" href="{{action('EventsController@show', [$event->id])}}">
                                                        <span class="icon-calendar"></span>lees meer
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="clear"></div>


                    </div>
                </div>

                <div class="container-fluid history">
                    <h1 class="center">Recente activiteiten</h1>
                    <div class="customNavigation">
                        <a class="icon-left prev"></a>
                        <a class="icon-right next"></a>
                    </div>

                    <div class="container">
                        <div id="slide-recent" class="owl-carousel owl-theme">
                          @if($recentEvents->isEmpty())
                          <div class="col-xs-12">
                              <p>Momenteel zijn er geen recente evenementen</p>
                          </div>
                          @else
                          @foreach($recentEvents as $recentEvent)
                          <a href="{{action('AlbumController@show', [$recentEvent->id])}}">
                              <div class="item">
                                  <div class="img" style="background-image: url('assets/_userfiles/{{$recentEvent->image}}')"></div>
                                  <div class="title">{{$recentEvent->title}}</div>
                              </div>
                          </a>
                          @endforeach
                          @endif
                        </div>
                    </div>
                </div>

                @include('partials._blokken')

            </div>
        </div>
    </main>

@stop
