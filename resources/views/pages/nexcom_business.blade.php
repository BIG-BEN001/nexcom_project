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
    <div class="pr__bradcaump__area pr__bradcaump__home bg-image--bus_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px;*/">
                                @foreach($posts as $post)
                                    @if($post['id']==38)

                        <h2 class="bradcaump-title">{!!$post['title']!!}</h2>
                        <!--
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p class="bradcaump-p">Home > products > for business</p>
                        -->
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
                    <div class="pricing grad_bus">
                        <div class="content">
                            <div class="price_top_bus the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs_bus">
                                        <p>
                                        @foreach($posts as $post)
                                    @if($post['id']==19)
                                    {!!$post['title']!!}
                                        </p>
                                    </div>
                                    <hr class="price_hr_bus">
                                    <div class="price_bus">
                                        <p>
                                        {!!$post['description']!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom_bus">
                                <div class="text-left pl-2 pt-1">
                                {!!$post['description2']!!}
                                </div>
                                @endif
                            @endforeach
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/business') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe3').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe3" action="{{ url('subscribe/business') }}" method="get">
                                        <input type="hidden" value="3 Mbps @ Ksh 3,600" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_bus">
                        <div class="content">
                            <div class="price_top_bus the-service">
                                <div class="price_top_bus_in">
                                    <div class="price_mbs_bus">
                                        <p>
                                        @foreach($posts as $post)
                                    @if($post['id']==20)

                                    {!!$post['title']!!}
                                        </p>
                                    </div>
                                    <hr class="price_hr_bus">
                                    <div class="price_bus">
                                        <p>
                                        {!!$post['description']!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom_bus">
                                <div class="text-left pl-2 pt-1">
                                {!!$post['description2']!!}
                                </div>
                                @endif
                              @endforeach
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/business') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe5').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe5" action="{{ url('subscribe/business') }}" method="get">
                                        <input type="hidden" value="6 Mbps @ Ksh 6,000" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_bus">
                        <div class="content">
                            <div class="price_top_bus the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs_bus">
                                        <p>
                                        <p>
                                        @foreach($posts as $post)
                                    @if($post['id']==21)
                                    {!!$post['title']!!}
                                        </p>
                                    </div>
                                    <hr class="price_hr_bus">
                                    <div class="price_bus">
                                        <p>
                                        {!!$post['description']!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom_bus">
                                <div class="text-left pl-2 pt-1">
                                {!!$post['description2']!!}
                                </div>
                                @endif
                              @endforeach
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/business') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe10').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe10" action="{{ url('subscribe/business') }}" method="get">
                                        <input type="hidden" value="12 Mbps @ Ksh 14,500" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
                <!-- Start Single Pricing -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="pricing grad_bus">
                        <div class="content">
                            <div class="price_top_bus the-service">
                                <div class="price_top_bus_in">
                                    {{--                                <span><sup></sup> 6<sub>MBPS</sub></span>--}}
                                    <div class="price_mbs_bus">
                                        <p>
                                        @foreach($posts as $post)
                                    @if($post['id']==22)
                                    {!!$post['title']!!}
                                        </p>
                                    </div>
                                    <hr class="price_hr_bus">
                                    <div class="price_bus">
                                        <p>
                                        {!!$post['description']!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="price_bottom_bus">
                                <div class="text-left pl-2 pt-1">
                                {!!$post['description2']!!}
                                </div>
                                @endif
                              @endforeach
                                <div class="price__btn">
                                    <a class="" href="{{ url('subscribe/business') }}"
                                       onclick="event.preventDefault(); document.getElementById('subscribe15').submit();">
                                        Order Now
                                    </a>
                                    <form id="subscribe15" action="{{ url('subscribe/business') }}" method="get">
                                        <input type="hidden" value="20 Mbps @ Ksh 19,000" name="subscribe">
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
