var pos, marker, uniminuto, map, contentString, infoWindow, infowindow;
var latX, lonY;
function initMap() {
    uniminuto = {lat: 4.698488, lng: -74.089815};
//    var micasa = {lat: 4.691919, lng: -74.095337};
//    var myLatLng = {lat: 4.691919, lng: -74.095337};

    map = new google.maps.Map(document.getElementById('map'), {
        center: uniminuto,
        scrollwheel: true,
        zoom: 17,
        zoomControl: true,
        mapTypeControl: false
    });
//    map.addListener('click', function () {
//        var marker = new google.maps.Marker({
//            position: myLatLng,
//            map: map,
//            title: 'Hello World!',
//            draggable: true
//        });
//        marker.setMap(map);
//    });

//    var directionsDisplay = new google.maps.DirectionsRenderer({
//        map: map
//    });
//
//    // Set destination, origin and travel mode.
//    var request = {
//        destination: micasa,
//        origin: uniminuto,
//        travelMode: 'DRIVING'
//    };

//    // Pass the directions request to the directions service.
//    var directionsService = new google.maps.DirectionsService();
//    directionsService.route(request, function (response, status) {
//        if (status == 'OK') {
//            // Display the route on the map.
//            directionsDisplay.setDirections(response);
//        }
//    });
    infoWindow;
    infowindow = new google.maps.InfoWindow({content: contentString});

    contentString = '<div id="content">' +
            '<div id="siteNotice">' +
            '</div>' +
            '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
            '<div id="bodyContent">' +
            '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
            'sandstone rock formation in the southern part of the ' +
            'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
            'south west of the nearest large town, Alice Springs; 450&#160;km ' +
            '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
            'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
            'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
            'Aboriginal people of the area. It has many springs, waterholes, ' +
            'rock caves and ancient paintings. Uluru is listed as a World ' +
            'Heritage Site.</p>' +
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
            '(last visited June 22, 2009).</p>' +
            '</div>' +
            '</div>';
    // Try HTML5 geolocation.

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            latX = position.coords.latitude;
            lonY = position.coords.longitude;
            $("#lat").attr("value", latX);
            $("#lon").attr("value", lonY);
            marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'Ubicación Hallada :D'
            });
            map.setCenter(pos);
//            infoWindow.setPosition(pos);
            infoWindow.setMarker(marker);
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
//            infoWindow.setContent('<h1>Esta es tu ubicacion :D</h1>');
        }, function () {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
    marker.addListener('click', toggleBounce);
}
function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
}
var title = document.title;
switch (title) {
    case "Mi perfil":
        initMap();
        break;
    case "Registro tutorias":
        initMap();
        break;
    case "Busqueda de tutorias":
        break;
}