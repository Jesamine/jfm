<div class="container-fluid blokken no-margin">
    <div class="row">
        <ul>
            <li style="background-image: url('/assets/images/jfm_activiteiten.jpg')">
                <a href="{{action('EventsController@index')}}"><div>Ontdek de volgende evenementen</div></a>
            </li>

            <li style="background-image: url('/assets/images/jfm_fotos.jpg')">
                <a href="{{action('AlbumController@index')}}"><div>Bekijk enkele foto's</div></a>
            </li>

            <li style="background-image: url('/assets/images/jfm_team.jpg')">
                <a href="{{action('ForumController@team')}}"><div>Leer ons team kennen</div></a>
            </li>
        </ul>
    </div>
</div>
