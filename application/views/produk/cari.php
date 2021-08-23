<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Google Maps</title>
</head>

<body>
    
    </br>

    <h1>Membuat Google Maps dengan API</h1>
    <input id="search-input" class="controls" type="text" placeholder="Cari...">
    <div id="googleMap" style="width:100%;height:300px;"></div>
    <div id="address"></div>
    <div id="latitude"></div>
    <div id="longitude"></div>

    <script>
        var marker;
        var map;
        var geocoder;
        var infowindow;
        var searchBox;

        function gMap() {
            var mapProp = {
                center: new google.maps.LatLng(-6.175307, 106.827131),
                zoom: 15,
            };

            map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            geocoder = new google.maps.Geocoder();
            infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(map, 'click', function(event) {
                placeMarker(event.latLng);
                geoDecode();
            });

            searchBox = new google.maps.places.SearchBox(document.getElementById('search-input'));
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(document.getElementById('search-input'));

            google.maps.event.addListener(searchBox, 'places_changed', function() {
                searchBox.set('map', null);
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i, place;

                for (i = 0; place = places[i]; i++) {
                    (function(place) {
                        marker = new google.maps.Marker({
                            position: place.geometry.location
                        });

                        marker.bindTo('map', searchBox, 'map');

                        google.maps.event.addListener(marker, 'map_changed', function() {
                            if (!this.getMap()) {
                                this.unbindAll();
                            }
                        });

                        bounds.extend(place.geometry.location);

                        geocoder.geocode({
                            'latLng': marker.getPosition()
                        }, function(results, status) {
                            if (status == google.maps.GeocoderStatus.OK) {
                                if (results[0]) {
                                    document.getElementById("address").innerHTML = 'Alamat : ' + results[0].formatted_address;
                                    document.getElementById("latitude").innerHTML = 'Latitude : ' + marker.getPosition().lat();
                                    document.getElementById("longitude").innerHTML = 'Longitude : ' + marker.getPosition().lng();
                                    infowindow.setContent(results[0].formatted_address);
                                    infowindow.open(map, marker);
                                }
                            }
                        });
                    }(place));
                }

                map.fitBounds(bounds);
                searchBox.set('map', map);
                map.setZoom(Math.min(map.getZoom(), 15));
                geoDecode();
            });
        }

        function placeMarker(location) {
            if (marker == null) {
                marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            } else {
                marker.setPosition(location);
            }
        }

        function geoDecode() {
            geocoder.geocode({
                'latLng': marker.getPosition()
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        document.getElementById("address").innerHTML = 'Alamat : ' + results[0].formatted_address;
                        document.getElementById("latitude").innerHTML = 'Latitude : ' + marker.getPosition().lat();
                        document.getElementById("longitude").innerHTML = 'Longitude : ' + marker.getPosition().lng();
                        infowindow.setContent(results[0].formatted_address);
                        infowindow.open(map, marker);
                    }
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYr9QrsQjdnQRUwebApFa59Mg3aUwkdSU&callback=gMap&libraries=places"></script>
</body>