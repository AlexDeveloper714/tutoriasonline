var pos, marker, uniminuto, map, contentString, infoWindow, infowindow, latX, lonY;
var title, nombre, apellido, correo, usuario, documento, telefono, edad;

function geolocalizarUsuario() {
    uniminuto = {lat: 4.698488, lng: -74.089815};
    map = new google.maps.Map(document.getElementById('map'), {
        center: uniminuto,
        scrollwheel: true,
        zoom: 17,
        zoomControl: true,
        mapTypeControl: false
    });
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
            $("#mensaje").text("Carga completa");
            marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'Ubicación Hallada :D'
            });
            map.setCenter(pos);
            infoWindow.setMarker(marker);
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }, function () {
            $("#mensaje").text("Debes aceptar localizarte");
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        $("#mensaje").text("NO te podemos geolocalizar");
        latX = 0;
        lonY = 0;
        handleLocationError(false, infoWindow, map.getCenter());
    }
    marker.addListener('click', toggleBounce);
}
function buscarTutores() {
    uniminuto = {lat: 4.698488, lng: -74.089815};
    map = new google.maps.Map(document.getElementById('map'), {
        center: uniminuto,
        scrollwheel: true,
        zoom: 17,
        zoomControl: true,
        mapTypeControl: false
    });
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
    infowindow = new google.maps.InfoWindow({content: contentString});
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
            $("#mensaje").text("Carga completa");
            marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'Ubicación Hallada :D'
            });
            map.setCenter(pos);
            infoWindow.setMarker(marker);
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
            marker.addListener('click', toggleBounce);
        }, function () {
            $("#mensaje").text("Debes aceptar localizarte");
            latX = 0;
            lonY = 0;
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        $("#mensaje").text("NO te podemos geolocalizar");
        handleLocationError(false, infoWindow, map.getCenter());
    }

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
title = document.title;