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
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                    @foreach($posts as $post)

                                    @if($post['id']==15)

                        <h2 class="bradcaump-title">{!!$post['title']!!}</h2>
                        @endif
                            @endforeach
                        <!--
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p class="bradcaump-p">Home > products > for home</p>
                         -->
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
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_top the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                    @foreach($posts as $post)

                                    @if($post['id']==16)
                                        <p class="mbs">
                                        {!!$post['title']!!}
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
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe6').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe6" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="6 Mbps @ Ksh 2,900" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_top the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                        <p>
                                        @foreach($posts as $post)
                                        @if($post['id']==17)
                                        {!!$post['title']!!}
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
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe12').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe12" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="12 Mbps @ Ksh 4,000" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_home">
                        <div class="content">
                            <div class="price_top the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs">
                                        <p>
                                        @foreach($posts as $post)
                                        @if($post['id']==18)
                                        {!!$post['title']!!}
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
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/home') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe25').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe25" action="{{ url('subscribe/home') }}" method="get">
                                        <input type="hidden" value="25 Mbps @ Ksh 6,500" name="subscribe">
                                    </form>
                                </div>
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
    <!-- Start About Area -->
        @include('pages.callback')
    <!-- End About Area -->
    @include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
