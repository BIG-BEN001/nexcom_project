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
    <div class="pr__bradcaump__area bg-image--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-left">
                        <h2 class="bradcaump-title">FAQ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <div class="row">
        <div class="col-lg-12">
            <div class="section__title text-center">

                {{--                        <span>Types of Nexcom Internet</span>--}}
                <h2 style="font-size: 25px !important;">NEXCOM GENERAL KNOWLEDGE</h2>
            </div>
        </div>
    </div>
    <!-- Start Faq Area -->
    <div class="voopo__faq__area pb--120 pt--50 bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div id="accordion" class="panora_accordion" role="tablist">
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingOne">
                                <h5>
                                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is Nexcom WiFi? </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Let's skip the complicated tech speak and start with the basics. WiFi connects you to the
                                    Internet from your laptop, smartphone and other devices without any plugs and wires – but
                                    what a lot of people don’t know is that it’s much cheaper than using cellular data.

                                    Nexcom WiFi is WiFi at its absolute best! We have a broad network across the country,
                                    and globally too (with our partner networks) in most of the locations you already hang out in.
                                    This means that you automatically have free Internet access whenever you’re connected via WiFi
                                    on your device in an Nexcom zone. You’re welcome, and it’s a pleasure.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingTwo">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                        Does it make any difference to my speeds if I connect more devices?</a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Yes. Each device is likely to be using background data. Sharing your bandwidth over more devices will usually lead to slower speeds on each individual device.
                                    But adding more devices will not change your total speed, which remains at up to max Mbps.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingThree">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">How does WiFi work?</a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Think of it like water, we bring the water (the bandwidth), into a venue using physical pipes, these pipes are connected to the water system (the internet). Once inside a venue we use a sprinkler system (Access Points) to spray the water around. This spray is WiFi.

                                    Your phone, laptop or tablet is a cup and when you are connected to Nexcom WiFi you are essentially standing in the spray area catching water in a cup. Simple as that!!!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="four">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">
                                        What is a HOTSPOT FINDER?</a>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="four" data-parent="#accordion">
                                <div class="card-body">
                                    Use our HOTSPOT FINDER to locate your nearest Hotspot for direct access to Nexcom WiFi. Our Hotspots can be found in all major airports, many shopping malls and most restaurants. Just look out for the “Nexcom WiFi” sticker on the shop window. Have a look at the Hotspot Finder
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div id="accordion2" class="panora_accordion" role="tablist">
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingFive">
                                <h5>
                                    <a class="collapsed"  data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="true" aria-controls="collapseFive">Are there differences across the Nexcom WiFi zones? </a>
                                </h5>
                            </div>

                            <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion2">
                                <div class="card-body">
                                    Yes. Quite simply we cannot put massive pipes into every location, this will make WiFi MUCH more expensive. We put HUGE (Fibre) pipes into popular locations and small pipes (DSL) into unpopular locations. We spend a lot of time managing this, if we see we need bigger pipes in a specific location.                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingSix">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">
                                        How do I connect to WiFi?</a>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion2">
                                <div class="card-body">
                                    To connect to Nexcom, you need to switch the WiFi on your device on, then search for the @Nexcom amongst the available WiFi networks. Click on @Nexcom and it will connect. Then open your browser and you will be directed to the Nexcom Dashboard when you search.                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingSeven">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">Why is WiFi sometimes AWESOME and sometimes bad?</a>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#accordion2">
                                <div class="card-body">
                                    There are two possible reasons for this…
                                    <ul>
                                        <li>First, is that you could be standing at the very edge of the spray, so all the water does not reach you. You will know this is happening if you see there are only one or two WiFi bars.</li>
                                        <li>The second is if the pipes coming into the location, the ones that connect the sprinkler to the water system are too small. This means that there is not enough water in the spray to fill everyone’s cups. If everyone leaves, except one person, their cup will therefore be able to take all the water from the sprinkler and the experience will be better.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="eight">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">
                                        Sounds like a bit of a mission, can I make the way I use WiFi easier??</a>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="eight" data-parent="#accordion2">
                                <div class="card-body">
                                    Yes, use our App, it make’s connecting to Nexcom happen seamlessly in the background with no user intervention.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
    <script src="js/plugins.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
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
                center: new google.maps.LatLng(23.7286, 90.3854), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles:
                    [
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#444444"
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

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-1.331742, 36.862170),
                map: map,
                title: 'Dcare!',
                icon: 'images/icons/map.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>
@stop
