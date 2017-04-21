jQuery(function($){

    var main = document.querySelector('main');
    var role = main.getAttribute('role');
    if(role == 'contact'){
        var script = document.createElement('script');
        script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyDswCqClTvkgxgIzZqgfTUvd4YmzHpc-zY&callback=initialize";
        document.body.appendChild(script);
    }
});

function initialize(){

	var markers = [
    	['Jeugdforum Moere', 51.12047500000001, 2.9575589999999465]
	];

	var infoWindowContent = [['<span>Jeugdforum Moere</span>']];

    if($('#map').length) loadMap('map', markers, infoWindowContent, 17);
}

function loadMap(id, markers, infoWindowContent, zoom){

    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = { mapTypeId: 'roadmap', scrollwheel: false };

    // initialize map
    map = new google.maps.Map(document.getElementById(id), mapOptions);

    // initialize infowindow
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // iterate over array of markers and put them on the map
    for(i = 0; i < markers.length; i++){
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            title: markers[i][0],
            position: position,
            map: map
        });

        // set infowindow on each marker
        google.maps.event.addListener(marker, 'click', (function(marker, i){
            return function(){
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // automatically center the map according to the markers
        map.fitBounds(bounds);
    }

    // override our map zoom level once our fitBounds function runs (make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(zoom);
        google.maps.event.removeListener(boundsListener);
    });

    google.maps.event.addDomListener(window, 'resize', function(){
        map.setCenter(position);
    });

}
