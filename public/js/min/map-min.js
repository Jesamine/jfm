function initialize(){var e=[["Jeugdforum Moere",51.12047500000001,2.9575589999999465]],o=[["<span>Jeugdforum Moere</span>"]];$("#map").length&&loadMap("map",e,o,17)}function loadMap(e,o,n,t){var a,i=new google.maps.LatLngBounds,r={mapTypeId:"roadmap",scrollwheel:!1};a=new google.maps.Map(document.getElementById(e),r);var g=new google.maps.InfoWindow,s,p;for(p=0;p<o.length;p++){var m=new google.maps.LatLng(o[p][1],o[p][2]);i.extend(m),s=new google.maps.Marker({title:o[p][0],position:m,map:a}),google.maps.event.addListener(s,"click",function(e,o){return function(){g.setContent(n[o][0]),g.open(a,e)}}(s,p)),a.fitBounds(i)}var l=google.maps.event.addListener(a,"bounds_changed",function(e){this.setZoom(t),google.maps.event.removeListener(l)});google.maps.event.addDomListener(window,"resize",function(){a.setCenter(m)})}jQuery(function($){var e=document.querySelector("main"),o=e.getAttribute("role");if("contact"==o){var n=document.createElement("script");n.src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDswCqClTvkgxgIzZqgfTUvd4YmzHpc-zY&callback=initialize",document.body.appendChild(n)}});