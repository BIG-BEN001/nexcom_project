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
                                    @if($post['id']==27)
                        <h2 class="bradcaump-title">{!!$post['title']!!}
                            <!-- <img src="images/icons/wifi-icon.png"> -->
                        </h2>
                                 @endif
                              @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Pricing Table Area -->
    <div class="voopo__picing__area bg--cart-7 pb--20">

        <div class="container">
            <div class="row">
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_wifi the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                    @foreach($posts as $post)
                                    @if($post['id']==28)
                                        <p>
                                            <span class="price_in">{!!$post['title']!!}</span>
                                        </p>
                                    </div>
                                    <hr class="price_hr_yel">
                                    <div class="price">
                                        <p>
                                        {!!$post['description']!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <div class="text-left pl-2">
                                {!!$post['description2']!!}
                                </div>
                                @endif
                              @endforeach
                                {{--<div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe6').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe6" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="6 Mbps @ Ksh 3,500" name="subscribe">
                                    </form>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_wifi the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                        <p>
                                            <span class="price_in">Daily</span>
                                        </p>
                                    </div>
                                    <hr class="price_hr_yel">
                                    <div class="price">
                                        <p>
                                            <sup>Ksh</sup> 70
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <div class="text-left pl-2">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Validity - Per Day</li>
                                    </ul>
                                </div>
                                {{--<div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe12').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe12" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="12 Mbps @ Ksh 4,500" name="subscribe">
                                    </form>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_wifi the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                        <p>
                                            <span class="price_in">Weekly</span>
                                        </p>
                                    </div>
                                    <hr class="price_hr_yel">
                                    <div class="price">
                                        <p>
                                            <sup>Ksh</sup> 500
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <div class="text-left pl-2">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Validity - Per Week</li>
                                    </ul>
                                </div>
                                {{--<div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe25').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe25" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="25 Mbps @ Ksh 7,000" name="subscribe">
                                    </form>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_wifi the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                        <p>
                                            <span class="price_in">Monthly</span>
                                        </p>
                                    </div>
                                    <hr class="price_hr_yel">
                                    <div class="price">
                                        <p>
                                            <sup>Ksh</sup> 1,500
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom">
                                <div class="text-left pl-2">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Validity - Per Month</li>
                                    </ul>
                                </div>
                                {{--<div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe25').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe25" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="25 Mbps @ Ksh 7,000" name="subscribe">
                                    </form>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->

            </div>
            <div class="row mt--30">
            </div>
        </div>
    </div>
    <!-- End Pricing Table Area -->
    <!-- Start Voopo Business -->
    <div class="voopo__business nexcom-wifi bg--cart-4 pt--30 pb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12  text-center d-none d-sm-block">
                    <div class="thumb ptb--20">
                        <img src="{{ asset('images/wifi/02.jpg') }}" alt="voopo voip">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 sm__mt--40">
                                @foreach($posts as $post)
                                    @if($post['id']==32)
                    <div class="content pl-4">
                             {!!$post['title']!!}
                        <!-- <h2 class="title__line">Wifi </h2> -->

                        {{--                        <p class="first__desc">Complete internet solution for your Home and Business</p>--}}
                        <p>{!!$post['description']!!}
                        </p>
                        <!-- <ul style="    margin-top: -22px;">
                            <li>No data capping</li>
                            <li>No speed throttling</li>
                            <li>Express installation</li>
                        </ul> -->
                    </div>
                </div>
                                 @endif
                              @endforeach
            </div>
        </div>
    </div>
    <!-- End Voopo Business -->
    <!-- Start Voopo Business -->
    <div class="voopo__business nexcom-wifi bg--cart-4 pt--30 pb--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 sm__mt--40">
                    <div class="content pl-4">
                                 @foreach($posts as $post)
                                    @if($post['id']==33)
                                    {!!$post['title']!!}
                        {{--                        <p class="first__desc">Installation</p>--}}
                        <p>{!!$post['description']!!}
                            <br>
                        </p>
                    </div>
                </div>
                                  @endif
                              @endforeach
            </div>
        </div>
    </div>
    <!-- End Voopo Business -->
    <!-- Start Pricing Table Area -->
    <div class="voopo__picing__area bg--cart-7 pb--20 pt--10">
        <div class="container">
            <div class="row mt--20">

            </div>
        </div>
    </div>
    <!-- End Pricing Table Area -->

    @include('pages.callback')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
