function initMap() {
    var uniminuto = {lat: 4.698488, lng: -74.089815};
    var micasa = {lat: 4.691919, lng: -74.095337};

    var map = new google.maps.Map(document.getElementById('map'), {
        center: uniminuto,
        scrollwheel: true,
        zoom: 7
    });

    var directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
    });

    // Set destination, origin and travel mode.
    var request = {
        destination: micasa,
        origin: uniminuto,
        travelMode: 'DRIVING'
    };

    // Pass the directions request to the directions service.
    var directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function (response, status) {
        if (status == 'OK') {
            // Display the route on the map.
            directionsDisplay.setDirections(response);
        }
    });
}

