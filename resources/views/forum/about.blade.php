@extends('app')

@section('content')
<main>
    <div class="wrapper">
        <div class="content">
            <div class="container">
                <div class="intro">
                    <div class="col-sm-12">
                        <h1 class="left">jeugdforum moere</h1>
                    </div>

                    <div class="col-sm-6 part">
                        <p>
                            Elke week openen we de deuren 3 tot 4 keer om er <b>een gezellige avond (of zondagmiddag)</b> van te maken. <b>Iedereen is er welkom!</b> Wie voor de eerste keer komt zal direct de openheid van de mensen en de goede sfeer ervaren.
                        </p>

                        <p>Buiten de gewone avonden organiseren we door het jaar heen ook <b>verscheidene activiteiten</b>. </p>

                        <p>Enkele voorbeelden zijn:</p>

                        <ul>
                            <li>De school's out party</li>
                            <li>Moere Kermesse</li>
                            <li>Forumrock</li>
                            <li>Beursfuif</li>
                            <li>Oederjoars fête</li>
                            <li>Oktoberfest</li>
                            <li>Filmmarathon</li>
                        </ul>
                        <p>en nog veel meer!</p>

                        <a href="{{action('EventsController@index')}}" class="button red"><span class="icon-calendar"></span> ontdek meer activiteiten</a>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1 part thumbs">
                        <a href="/assets/images/forumrock.jpg" class="swipebox" title="" rel="about">
                            <img src="/assets/images/forumrock.jpg" alt="">
                        </a>

                        <a href="/assets/images/noballsnoglory.jpg" class="swipebox" title="" rel="about">
                            <img src="/assets/images/noballsnoglory.jpg" alt="">
                        </a>

                    </div>

                    <div class="clear"></div>

                    <div class="col-sm-6 part">
                        <h1 class="left">Deelnemen?</h1>
                        <p>Je kan lid worden door een lidkaart te kopen in het Jeugdforum of aan iemand van het bestuur. Een lidkaart kost <b>5 euro en is 1 jaar geldig</b>.</p>
                    </div>
                    <div class="col-sm-6 part">
                        <h1 class="left">Wablief?</h1>
                        <p>We denken ook aan de waardevolle oren van onze klanten. Dankzij onze nieuwe <b>decibelmeter</b> staat de muziek nooit meer te luid is blijft het altijd aangenaam voor iedereen.</p>
                    </div>

                </div>
            </div>

            @if(!$history_items->isEmpty())

            <section class="container-fluid history">
                <h1 class="center">Geschiedenis</h1>
                <div class="customNavigation">
                    <a class="icon-left prev"></a>
                    <a class="icon-right next"></a>
                </div>

                <div class="container">
                    <div id="slide-history" class="owl-carousel owl-theme">

                        @foreach($history_items as $history_item)

                        <div class="item">
                            <img src="{{asset('uploads/'.$history_item->image)}}">
                            <div class="content_history">
                                {!! $history_item->description !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

            @endif

            @include('partials._blokken')
        </div>
    </div>
</main>
@stop
