@extends('app')

@section('content')
    <main>
        <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="intro">
                        <div class="col-sm-12">
                            <h1 class="left">Ons team</h1>
                        </div>

                        <div class="clear"></div>
                        <div class="col-sm-6 part">
                            <p>
                                Het dagelijks bestuur bestaat uit een groep jonge vrijwilligers die zich graag en vol overtuiging inzetten om dit allemaal waar te maken.</p><p> Deze groep heeft vele voorgangers gehad, want het jeugdforum bestaat inmiddels al meer dan <b>50 jaar</b>.
                            </p>

                            <p>Vragen? Neem contact op met Ward Logghe, de voorzitter
                                </br>
                                <a class="tel" href="tel:+32472809343"><span class="icon-phone"></span> <b>0472 / 80 93 43</b></a>
                            </p>
                        </div>

                        <div class="col-sm-5 col-sm-offset-1 part thumbs">
                            <a href="/assets/images/team.jpg" class="swipebox" rel="team" title="">
                                <img src="/assets/images/team.jpg" alt="" id="team">
                            </a>
                        </div>

                    </div>
                </div>

               @include('partials._blokken')

            </div>
        </div>
    </main>

@stop
