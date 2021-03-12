@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Nexcom - Internet Services
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- put styling here -->
@stop
@section('content')

    <!-- Start Bradcaump area -->
    <!--
    <div class="pr__bradcaump__area_faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Network Coverage</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
     -->
    <!-- End Bradcaump area -->

    <div id="googleMap" style="width:100%;height:600px;margin-top: 100px;"></div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
    <script src="js/plugins.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4miDa_ejpkDcsXnTX-BlkUoA_SYTrNy8&libraries=places"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(-1.331741, 36.862172), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles:
                    [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#0f3d56"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#f2f2f2"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "saturation": "-100"
                                },
                                {
                                    "lightness": "57"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "lightness": "1"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 45
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.bus",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.bus",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": "0"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "gamma": "1.00"
                                },
                                {
                                    "weight": "1"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.bus",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "saturation": "-100"
                                },
                                {
                                    "weight": "1"
                                },
                                {
                                    "lightness": "0"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.rail",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.rail",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "gamma": "1"
                                },
                                {
                                    "lightness": "40"
                                }
                            ]
                        },
                        {
                            "featureType": "transit.station.rail",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "saturation": "-100"
                                },
                                {
                                    "lightness": "30"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "color": "#d2d2d2"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        }
                    ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            getPlaza2000(map);
            getPangani(map);
            getLangata(map);
            getFreedom(map);
            getEastleigh(map);
            getSouthB(map);
            getCBD(map);
            getSamar(map);
            getTwiga(map);

        }

        function getPlaza2000(map) {
            // Plaza 2000
            var markerPlaza2000 = new google.maps.Marker({
                position: new google.maps.LatLng(-1.331742, 36.862170),
                map: map,
                title: 'Plaza 2000',
                icon: 'images/mapicons/orange-dot.png',
                // animation:google.maps.Animation.BOUNCE

            });

            markerPlaza2000.addListener('click', function() {
                infowindowPlaza2000.open(map, markerPlaza2000);
            });

            var contentStringPlaza2000 = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Plaza 2000 and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="{{ url('get-in-touch')  }}">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowPlaza2000 = new google.maps.InfoWindow({
                content: contentStringPlaza2000
            });
        }

        function getPangani(map) {
            // Pangani Apartments
            var markerPangani = new google.maps.Marker({
                position: new google.maps.LatLng(-1.266464, 36.839707),
                map: map,
                title: 'Pangani',
                icon: 'images/mapicons/map-bus-nexcom.png',
                // animation:google.maps.Animation.BOUNCE

            });

            markerPangani.addListener('click', function() {
                infowindowPangani.open(map, markerPangani);
            });

            var contentStringPangani = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Pangani and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowPangani = new google.maps.InfoWindow({
                content: contentStringPangani
            });
        }

        function getLangata(map) {
            // Langata Apartments
            var markerLangata = new google.maps.Marker({
                position: new google.maps.LatLng(-1.363662, 36.736519),
                map: map,
                title: 'Langata',
                icon: 'images/mapicons/green-dot.png',
                // animation:google.maps.Animation.BOUNCE
            });

            markerLangata.addListener('click', function() {
                infowindowLangata.open(map, markerLangata);
            });

            var contentStringLangata = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Langata and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowLangata = new google.maps.InfoWindow({
                content: contentStringLangata
            });
        }

        function getFreedom(map) {
            // Eastleigh Apartments
            var markerFreedom = new google.maps.Marker({
                position: new google.maps.LatLng(-1.321910, 36.802030),
                map: map,
                title: 'Freedom',
                icon: 'images/mapicons/map-home-nexcom.png'
            });

            markerFreedom.addListener('click', function() {
                infowindowFreedom.open(map, markerFreedom);
            });

            var contentStringFreedom = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Freedom and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowFreedom = new google.maps.InfoWindow({
                content: contentStringFreedom
            });
        }

        function getEastleigh(map) {
            // Eastleigh Apartments
            var markerEastleigh = new google.maps.Marker({
                position: new google.maps.LatLng(-1.273298, 36.848316),
                map: map,
                title: 'Eastleigh',
                icon: 'images/mapicons/map-home-nexcom.png'
            });

            markerEastleigh.addListener('click', function() {
                infowindowEastleigh.open(map, markerEastleigh);
            });

            var contentStringEastleigh = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Eastleigh and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowEastleigh = new google.maps.InfoWindow({
                content: contentStringEastleigh
            });
        }

        function getSouthB(map) {

            // CBD Nairobi
            var markerSouthB = new google.maps.Marker({
                position: new google.maps.LatLng(-1.310327, 36.833718),
                map: map,
                title: 'South B',
                icon: 'images/mapicons/map-home-nexcom.png'
            });

            markerSouthB.addListener('click', function() {
                infowindowSouthB.open(map, markerSouthB);
            });

            var contentStringSouthB = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">South B and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowSouthB = new google.maps.InfoWindow({
                content: contentStringSouthB
            });
        }

        function getCBD(map) {

            // CBD Nairobi
            var markerCBD = new google.maps.Marker({
                position: new google.maps.LatLng(-1.284719, 36.825919),
                map: map,
                title: 'CBD Nairobi',
                icon: 'images/mapicons/wi-fi-2.png'
            });

            markerCBD.addListener('click', function() {
                infowindowCBD.open(map, markerCBD);
            });

            var contentStringCBD = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Nairobi CBD and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowCBD = new google.maps.InfoWindow({
                content: contentStringCBD
            });
        }

        function getSamar(map) {
            // Samar Apartments
            var markerSamar = new google.maps.Marker({
                position: new google.maps.LatLng(-1.257085, 36.797981),
                map: map,
                title: 'Samar Apartments',
                icon: 'images/mapicons/map-bus-nexcom.png'
            });
            markerSamar.addListener('click', function() {
                infowindowSamar.open(map, markerSamar);
            });

            var contentStringSamar = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Samar Apartments and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowSamar = new google.maps.InfoWindow({
                content: contentStringSamar
            });
        }

        function getTwiga(map) {
            // Twiga Apartments
            var markerTwiga = new google.maps.Marker({
                position: new google.maps.LatLng(-1.314645, 36.837775),
                map: map,
                title: 'Twiga Heights',
                icon: 'images/mapicons/map-bus-nexcom.png'
            });
            markerTwiga.addListener('click', function() {
                infowindowTwiga.open(map, markerTwiga);
            });

            var contentStringTwiga = '<div class="service_map  service_1 the-service ">'+
                // '<img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;'+
                '<p><span class="service-col">Twiga Heights and its environs has nexcom internet access</span></p>'+
                '<div class="text-left text-center">'+
                '<a class="nexcom__btn_map text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>'+
                '</div>'+
                '</div>'

            var infowindowTwiga = new google.maps.InfoWindow({
                content: contentStringTwiga
            });
        }
    </script>
@stop
