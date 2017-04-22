@extends('app')

@section('content')
    <main role="contact">
        <div class="wrapper">
            <div class="content">
                <div class="container">
                    <div class="intro">
                        <div class="col-sm-12">
                            <h1 class="left">contact</h1>
                        </div>

                        <div class="clear"></div>
                        <div class="col-sm-6 part">
                            <p>
                                <span class="icon-map red"></span> Molenstraat 26, Moere-Gistel
                            </p>

                            <p>Heb je vragen, bemerkingen, suggesties, problemen, wil je lid worden van het Jeugdforum of heb je een band waarmee je wenst op te treden, <b>aarzel niet om ons te contacteren via volgende kanalen</b> </p>

                            <ul>
                                <li>info@jeugdforum.be</li>
                                <li>De voorzitter, Ward <a href="tel:+32472809343">0472 / 80 93 43</a></li>
                            </ul>

                            <p><b>Openingsuren:</b></p>

                            <ul>
                                <li>Vr-Za: 20u - 3u</li>
                                <li>Vakanties: + woe: 20u - 3u</li>
                            </ul>

                        </div>

                        <div class="col-sm-5 col-sm-offset-1 part thumbs">
                            <a href="/assets/images/gevel.jpg" class="swipebox" rel="contact">
                                <img src="/assets/images/gevel.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="container-fluid history">
                    <h1 class="center">Links</h1>
                    <div class="customNavigation">
                        <a class="icon-left prev"></a>
                        <a class="icon-right next"></a>
                    </div>

                    <div class="container">

                        <div id="slide-links" class="owl-carousel owl-theme">

                            @foreach($links as $link)
                            <a href="http://www.{{$link->link}}" target="_blank">
                                <div class="item">
                                    <img src="{{asset('uploads/'.$link->image)}}" alt="{{$link->organisatie}}">
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div id="map"></div>

               @include('partials._blokken')
            </div>
        </div>
    </main>

@stop
