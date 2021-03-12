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
    <div class="pr__bradcaump__area_faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center breadi">
                        <h2 class="bradcaump-title">Frequently Asked Questions</h2>
                        <p class="bradcaump-p"><a href="{{ url('/nexcom') }}"> Home</a> > <a href="{{ url('/FAQs') }}"> FAQs</a> > Products & Services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Faq Area -->
    <div class="voopo__faq__area pb--120 pt--20 bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="accordion" class="panora_accordion pr-lg-5 pl-lg-5" role="tablist">
                        <div class="section__title text-left pb-2">
                            <h2 style="font-size: 25px !important;color: #545454">Product and Services </h2>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingOne">
                                <h5>
                                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Nexcom Home </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Our fiber optic enabled service provides the ultimate experience, the kind of
                                    internet your family deserves. You can connect multiple devices in your home at the same time,
                                    any time of the day or night. Now you just need to think of the possibilities were no limits apply.
                                    <br>
                                    <div class="table-responsive-sm">
                                        <table class="table">
                                          <thead class="thead-light">
                                            <tr>
                                              <th scope="col">Package</th>
                                              <th class="text-center" scope="col">6 Mbps</th>
                                              <th class="text-center" scope="col">12 Mbps</th>
                                              <th class="text-center" scope="col">25 Mbps</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr">
                                              <th  scope="row">Monthly cost</th>
                                              <td class="text-center">2,900.00 KSH</td>
                                              <td class="text-center">4,000.00 KSH</td>
                                              <td class="text-center">6,500.00</td>
                                            </tr>
                                            <tr >
                                              <th scope="row">Validity Period</th>
                                              <td class="text-center">30 days</td>
                                              <td class="text-center">30 days</td>
                                              <td class="text-center">30 days</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">Features</th>
                                                <td>
                                                    <ul>
                                                        <li>Suitable for HD video, music streaming</li>
                                                        <li>General internet usage</li>
                                                    </ul>
                                                </td>
                                              <td>
                                                   <ul>
                                                        <li>Suitable for HD video, music streaming and online gaming</li>
                                                        <li>General internet usage</li>
                                                        <li>Use of multiple devices</li>
                                                    </ul>
                                              </td>
                                              <td >
                                                   <ul>
                                                        <li>Suitable for 4K video</li>
                                                        <li>Music streaming and online gaming</li>
                                                        <li>General internet usage</li>
                                                        <li>Use of multiple devices</li>
                                                    </ul>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingTwo">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo"> Nexcom Business</a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Internet access for business keeps your business connected at the speed of light,
                                    ensuring your business is always on, responsive and ready to make the most of emerging
                                    opportunities. You can rest easy knowing your Internet access is provisioned behind layers of inbuilt network firewalls and web security that ensures you enjoy the true value of the internet
                                    connectivity in your business operations without fear of malicious attacks.<br>

                                    <div class="table-responsive-sm">
                                        <table class="table">
                                          <thead class="thead-light">
                                            <tr>
                                              <th class="text-center" scope="col">Package</th>
                                              <th class="text-center" scope="col">Monthly cost</th>
                                              <th class="text-center" scope="col">Validity Period</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr">
                                              <th class="text-center" scope="row">3 Mbps</th>
                                              <td class="text-center">3,600.00 KSH</td>
                                              <td class="text-center">30 days</td>
                                            </tr>
                                            <tr >
                                              <th class="text-center" scope="row">6 Mbps</th>
                                              <td class="text-center">6,000.00 KSH</td>
                                              <td class="text-center">30 days</td>
                                            </tr>
                                            <tr >
                                              <th class="text-center" scope="row">12 Mbps</th>
                                              <td class="text-center">14,400.00 KSH</td>
                                              <td class="text-center">30 days</td>
                                            </tr>
                                            <tr >
                                              <th class="text-center" scope="row">20 Mbps</th>
                                              <td class="text-center">19,000.00 KSH</td>
                                              <td class="text-center">30 days</td>
                                            </tr>

                                          </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="acc-header" role="tab" id="headingThree">
                                <h5>
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Nexcom WiFi</a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    High Speed Broadband Internet is brought to your home through wireless access
                                    radio technology, commonly known as Wireless to the Home/business (WTTH/WTTB)
                                    respectively.<br>
                                    <br>
                                    You can now access this from any of our points of presence within Nairobi and its environs and soon in
                                    other major towns.

                                    <div class="table-responsive-sm">
                                        <table class="table mt-10">
                                          <thead class="thead-light">
                                            <tr>
                                              <th class="text-center" scope="col">Package</th>
                                              <th class="text-center" scope="col">Cost</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr">
                                              <th class="text-center" scope="row">Hourly</th>
                                              <td class="text-center">20.00 KSH</td>
                                            </tr>
                                            <tr >
                                              <th class="text-center" scope="row">Daily</th>
                                              <td class="text-center">70.00 KSH</td>
                                            </tr>
                                            <tr >
                                              <th class="text-center" scope="row">Weekly</th>
                                              <td class="text-center">500.00 KSH</td>
                                            </tr>
                                            <tr >
                                              <th class="text-center" scope="row">Monthly</th>
                                              <td class="text-center">1,500.00 KSH</td>
                                            </tr>

                                          </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="card">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->
    @include('pages.callback')

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
