<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeugdforum Moere</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Jeugdhuis Jeugdforum Moere" />
    <meta name="keywords" content=" jeugdhuis, jeugdforum, moere, gistel" />

    <!-- CSS -->
    <link rel="stylesheet" href="/css/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/css/vendor/slidebars.min.css" />
    <link rel="stylesheet" href="/css/vendor/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="/css/vendor/swipebox/swipebox.css"/>

    <link rel="stylesheet" href="/css/layout.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">

    <style>
        .galleria-theme-classic {
            background: none;
        }
    </style>

</head>
<body class="public">

<div class="container-fluid" id="fixed-position" canvas>
    <div class="row">
        <header id="header">
            <section class="navbar-mobile visible-xs">
                <div class="container">
                    <a href="/"><img src="{{asset('assets/logo.png')}}" alt="" class="logo" /></a>
                    <button class="js-toggle-mobile-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </section>
            <section class="hidden-xs">
                <div class="container">
                  <section>
                    <div class="col-sm-5 head left">
                      <ul class="social-media">
                          <li><a href="https://www.facebook.com/Jeugdforum" target="_blank"><span class="icon-fb"></span></a></li>
                          <li><a href="https://www.instagram.com/jeugdforum" target="_blank"><span class="icon-instagram"></span></a></li>
                          <li><a href="https://twitter.com/Jeugdforum" target="_blank"><span class="icon-twitter"></span></a></li>
                          <li><a href="https://www.snapchat.com/add/jeugdforum" target="_blank"><span class="icon-snapchat"></span></a></li>
                      </ul>
                    </div>

                    <div class="col-sm-2 middle">
                        <a href="/">
                            <img src="{{asset('assets/logo.png')}}" alt="" id="logo">
                        </a>
                    </div>

                    <div class="col-sm-5 head right">
                        Molenstraat 26, Moere - Gistel
                    </div>
                  </section>


                    <div class="clear">

                    </div>

                    <div class="navigation col-sm-12">

                        <ul>
                            <li><a href="{{action('ForumController@about')}}">over jfm</a></li>
                            <li><a href="{{action('ForumController@team')}}">ons team</a></li>
                            <li><a href="{{action('EventsController@index')}}">agenda</a></li>
                            <li><a href="{{action('AlbumController@index')}}">foto's</a></li>
                            <li><a href="{{action('ForumController@contact')}}">contact</a></li>
                        </ul>
                    </div>

                </div>
            </section>
        </header>
    </div>
</div>

<div off-canvas="mobile-menu left shift">
    <nav role="pages">
        <ul>
            <li><a href="/" class="active">Home</a></li>
            <li><a href="{{action('ForumController@about')}}">Over JFM</a></li>
            <li><a href="{{action('ForumController@team')}}">Ons team</a></li>
            <li><a href="{{action('EventsController@index')}}">Agenda</a></li>
            <li><a href="{{action('AlbumController@index')}}">Foto's</a></li>
            <li><a href="{{action('ForumController@contact')}}">Contact</a></li>
        </ul>
    </nav>

    <ul class="info">
        <li><span class="icon-map"></span> Molenstraat 26, Moere - Gistel</li>
        <li><span class="icon-clock"></span> Vr-Za: 20u - 3u</li>
    </ul>

    <ul class="social-media">
        <li><a href="https://www.facebook.com/Jeugdforum" target="_blank"><span class="icon-fb"></span></a></li>
        <li><a href="https://www.instagram.com/jeugdforum" target="_blank"><span class="icon-instagram"></span></a></li>
        <li><a href="https://twitter.com/Jeugdforum" target="_blank"><span class="icon-twitter"></span></a></li>
        <li><a href="https://www.snapchat.com/add/jeugdforum" target="_blank"><span class="icon-snapchat"></span></a></li>
    </ul>
</div>

<div canvas="container">
    @yield('content')

    <footer>
        <div class="container footer">
            <div class="col-sm-3 col-xs-12">
                <ul class="info">
                    <li class="title">Jeugdforum Moere</li>
                    <li>Molenstraat 26, 8470 Moere-Gistel</li>
                    <li><a href="tel:+32472809343">0472 / 80 93 43</a></li>
                    <li><a href="mailto:info@jeugdforummoere.be">info@jeugdforummoere.be</a></li>
                </ul>
            </div>

            <div class="col-sm-3 col-sm-offset-2 col-xs-12">
                <ul class="hours">
                    <li class="title">Openingsuren</li>
                    <li>Vr-Za:  20u - 3u</li>
                    <li class="title">Vakanties</li>
                    <li>+ Woe: 20u - 3u</li>
                </ul>
            </div>

            <div class="col-sm-3 col-sm-offset-1 col-xs-12">
                <ul class="social">
                    <li class="title">Volg JFM op</li>
                    <li><a href="https://www.facebook.com/Jeugdforum" target="_blank"><span class="icon-fb"></span></a></li>
                    <li><a href="https://www.instagram.com/jeugdforum" target="_blank"><span class="icon-instagram"></span></a></li>
                    <li><a href="https://twitter.com/Jeugdforum" target="_blank"><span class="icon-twitter"></span></a></li>
                    <li><a href="https://www.snapchat.com/add/jeugdforum" target="_blank"><span class="icon-snapchat"></span></a></li>
                </ul>
            </div>
        </div>

        <div class="container-fluid disclaimer">
            <div class="container">
                <p class="text-center">Jeugdforum Moere 2016 - Jesamine Deprez-Degryse</p>
            </div>
        </div>
    </footer>

</div>
<script src="/js/vendor/jquery/jquery.min.js"></script>
<script src="/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="/js/vendor/slidebars.min.js"></script>
<script src="/js/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/js/vendor/swipebox/jquery.swipebox.min.js"></script>
<script src="/js/vendor/galleria/galleria-1.5.1.min.js"></script>
<script src="/js/vendor/galleria/galleria.facebook.js"></script>

<script src="/js/map.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
