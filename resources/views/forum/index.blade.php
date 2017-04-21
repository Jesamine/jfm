@extends('app')

@section('content')
    <main class="home">
        <div class="wrapper home">
            <div class="container-fluid" id="fixed-position" canvas>
                <div class="row">
                    <div class="img_bg" style="background-image: url('assets/images/bg_01.jpg');">
                        <h1 class="marker">Jeugdforum Moere</h1>
                        <ul class="borders">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content home">
                <div class="container">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="intro">
                        <h1 class="center">welkom</h1>
                        <div class="col-sm-6">
                            <p>
                                <b>Jeugdforum VZW</b> is een niet-commerciële <b>ontmoetingsplaats voor de jeugd</b> van Moere en omstreken.Als jeugdhuis zorgen we voor een toffe sfeer waarin elke jongere zich kan ontspannen en amuseren.
                            </p>
                            <p>
                                Het dagelijks bestuur bestaat uit een groep jonge vrijwilligers die zich graag en vol overtuiging inzetten om dit allemaal waar te maken.</p><p> Deze groep heeft vele voorgangers gehad, want het jeugdforum bestaat inmiddels al meer dan <b>50 jaar</b>. Dankzij de vele inzet dragen we dus voortaan de <b>koninklijke titel</b>.
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <img src="assets/images/jfm_01.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="container-fluid blokken index">
                    <div class="row">
                        <ul>
                            <li style="background-image: url('assets/images/jfm_activiteiten.jpg')"><a href="{{action('EventsController@index')}}"><div>Ontdek de volgende evenementen</div></a></li>
                            <li style="background-image: url('assets/images/jfm_fotos.jpg')"><a href="{{action('AlbumController@index')}}"><div>Bekijk enkele foto's</div></a></li>
                            <li style="background-image: url('assets/images/jfm_team.jpg')"><a href="{{action('ForumController@team')}}"><div>Leer ons team kennen</div></a></li>
                        </ul>
                    </div>
                </div>

                <div class="container activiteiten">
                    <h1 class="center">Volgende activiteiten</h1>

                    @if($nextEvents->isEmpty())
                        <p>Geen volgende activiteiten</p>
                    @else
                        @foreach($nextEvents as $k => $nextEvent)
                            @if($k == 0)
                                <div class="col-md-5 col-md-offset-1 col-xs-12 activiteit">
                                    @else
                                        <div class="col-md-5 col-xs-12 activiteit">
                                            @endif
                                            <div class="col-md-4 col-xs-3">
                                                <div class="row">
                                                    <div class="datum"><div><?php echo date_format( new DateTime($nextEvent['date']), 'd/m' )?></div></div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-xs-offset-3">
                                                <div class="row">
                                                    <h2>{{$nextEvent->title}}</h2>
                                                    <p class="intro_act">{{$nextEvent->intro}}</p>
                                                    <div class="col-md-12 col-sm-6">
                                                        <div class="row">
                                                            <a class="button border" href="{{ action('EventsController@show', [$nextEvent->id]) }}">
                                                                <span class="icon-calendar"></span>Lees meer
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif()

                                    <div class="col-sm-1"></div>
                                    <div class="clear"></div>
                                    <div class="col-lg-4 col-sm-6 center-block center-button">
                                        <a href="{{action('EventsController@index')}}" class="button red"><span class="icon-calendar"></span> ontdek meer activiteiten</a>
                                    </div>
                                </div>
                </div>
            </div>
    </main>

@stop
