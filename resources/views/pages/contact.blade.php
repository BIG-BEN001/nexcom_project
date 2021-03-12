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
    <div class="pr__bradcaump__area pr__bradcaump__home bg-image--home_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                                @foreach($posts as $post)
                                    @if($post['id']==34)
                        <h2 class="bradcaump-title">{!!$post['title']!!}</h2>

                             @endif
                              @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Testimonial Area -->
    <div class="voopo__testimnial bg--white pb--50">
        <div class="container">
            <div class="row mt--4">
                <!-- Start Single Clint -->
                <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                    <div class="testimonial">
                    @foreach($posts as $post)
                                    @if($post['id']==35)
                        <div class="clint__info">
                            <h4>{!!$post['title']!!}</h4>

                            <p>{!!$post['description']!!}</p>
                                @endif
                              @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Single Clint -->
                <!-- Start Single Clint -->
                <div class="col-xl-3 offset-xl-1 col-md-4 col-sm-6 col-12 xs__mt--40">
                    <div class="testimonial">
                                    @foreach($posts as $post)
                                    @if($post['id']==36)
                        <div class="clint__info">
                            <h4>{!!$post['title']!!}</h4>
                            {!!$post['description']!!}
                        </div>
                                  @endif
                              @endforeach
                    </div>
                </div>
                <!-- End Single Clint -->
                <!-- Start Single Clint -->
                <div class="col-xl-3 offset-xl-1 col-md-4 col-sm-6 col-12 sm__mt--40">
                    <div class="testimonial">
                                 @foreach($posts as $post)
                                    @if($post['id']==37)
                        <div class="clint__info">
                            <h4>{!!$post['title']!!}</h4>
                            <p>{!!$post['description']!!}</p>
                        </div>
                              @endif
                              @endforeach
                    </div>
                </div>
                <!-- End Single Clint -->
            </div>
        </div>
    </div>

    <!-- End Testimonial Area -->
    <!-- Start Contact Address -->
    <div class="voopo__address bg--cart-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                    @if($message = Session::get('success'))
                        {{ $message }}
                    @endif
                    <div class="voopo__contact__form">
                        <form id="contact-forms" action="{{ url('/contact') }}" method="post">
                            @csrf
                            <div class="single-contact-form">
                                <input type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="single-contact-form">
                                <input type="email" name="email" placeholder="Your e-mail">
                            </div>
                            <div class="single-contact-form message">
                                <textarea name="message"  placeholder="Your Message"></textarea>
                            </div>
                            <div class="contact-btn">
                                <button class="menuItemBtn" type="submit" style="width: 90px;">Send</button>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-5 offset-lg-1 col-md-6 col-sm-12 col-12">
                    <div class="contact__thumb">
                        <img src="images/about/contact.png" alt="voopo voip">
                    </div>
                </div>--}}
            </div>
        </div>

        <div class="goggle__map mb-1">
            <iframe width="100%" height="100%" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.60475158185835!2d36.778205043365475!3d-1.2701387537305924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19e36b40d24f%3A0x867e0aa49163e85e!2sSri%20Aurobindo%20Avenue%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1596615574837!5m2!1sen!2ske" allowfullscreen></iframe>
        </div>


    </div>
    <!-- End Contact Address -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
    <script src="js/plugins.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4miDa_ejpkDcsXnTX-BlkUoA_SYTrNy8"></script>
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

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-1.331742, 36.862170),
                map: map,
                title: 'DirectCore Technologies',
                icon: 'images/mapicons/green-dot.png',
                animation:google.maps.Animation.BOUNCE

            });
        }
    </script>
@stop
