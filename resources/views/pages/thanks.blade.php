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

    <!-- Start Voopo Business -->
    <div class="voopo__business nexcom-thanks bg--cart-4 pt--100 pb--30">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center pb--40">
                        <img src="{{ asset('images/icons/tick.png') }}" style="height: 150px">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 sm__mt--40">
                    <div class="content pl-4">
                        <h3 class="title__line">{{ $message = Session::get('success') ?? 'Thank You For Signing Up!' }} </h3>
                        <p class="first__desc">You will be contacted shortly by our Sales Agent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Voopo Business -->
    <!-- Start Service Area -->
    <div class="voopo__service__video bg--cart-9 pb--30">
        <!-- Start Service Area -->
        <div class=" service__position service--2">
            <div class="container">
                <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                        <div class="service service_1 the-service ">
                            {{--                            <img src="images/icons/nexcom-home.png" alt="voopo voip">&nbsp;&nbsp;--}}
                            <h2>
                                <span class="service-col">Internet access<br> for Home</span>
                            </h2>
                            <div class="text-left mt--20 text-center">
                                <a class="nexcom__btn text-center" target="_blank" href="{{ url('/nexcom-home') }}">Get Connected</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40 text-center">
                        <div class="service service_2 the-service ">
                            {{--                            <img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;&nbsp;--}}
                            <h2>
                                <span class="service-col">Internet access<br> for Business</span>
                            </h2>
                            <div class="text-left mt--20 text-center">
                                <a class="nexcom__btn text-center" target="_blank" href="{{ url('/nexcom-business') }}">Get Connected</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40 text-center ">
                        <div class="service service_3 the-service ">
                            {{--                            <img src="images/icons/nexcom-wifi-2.png" alt="Nexcom Wifi " style="height: 55px;">&nbsp;&nbsp;--}}
                            <br>
                            <h2>
                                <span class="service-col">Nexcom WiFi</span>
                            </h2>
                            <div class="text-left mt--20 text-center">
                                <a class="nexcom__btn text-center" target="_blank" href="{{ url('/nexcom-wifi') }}">Get Connected</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
        <!-- End Service Area -->
    </div>
    <!-- End Service Area -->


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
