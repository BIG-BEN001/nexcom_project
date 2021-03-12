@extends('layouts/default')

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

    <!-- Start Banner Area -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->

            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active bg-image--home text-left">
                    <div class="layer">
                        <div class="carousel-caption d-none d-md-block">
                        @foreach($posts as $post)
                            @if($post['id']==1)

                            <h2 id="sl" class="display-4">{!!$post['title']!!}
                            @endif
                             @endforeach
                            {{--                                <p class="lead">This is a description for the first slide.</p>--}}
                        </div>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item bg-image--bus">
                    <div class="layer">
                        <div class="carousel-caption d-none d-md-block">
                        @foreach($posts as $post)
                            @if($post['id']==2)

                            <h2 id="sl" class="display-4">{!!$post['title']!!}    </h2>
                            @endif
                             @endforeach
                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item bg-image--wifi">
                    <div class="layer">
                        <div class="carousel-caption d-none d-md-block">
                        @foreach($posts as $post)
                            @if($post['id']==3)

                            <h2 id="sl" class="display-4"><br>{!!$post['title']!!} </h2>
                            @endif
                             @endforeach
                            {{--                                <p class="lead">This is a description for the third slide.</p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- End Banner Area -->

    <!-- Start Service Area -->
    <div class="voopo__service__video bg--cart-9">
        <!-- Start Service Area -->
        <div class="voopo__service service__position service--2">
            <div class="container">
                <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                        <div class="service service_1 the-service ">
{{--                            <img src="images/icons/nexcom-home.png" alt="voopo voip">&nbsp;&nbsp;--}}
                            <h2 id="card">
                                <span class="service-col">
                                @foreach($posts as $post)

                                    @if($post['id']==4)
                                        {!!$post['title']!!}

                                </span>
                            </h2>
                            <div class="text-left mt--20 text-center">
                                <a class="nexcom__btn text-center" href="{{ url('/nexcom-home') }}">{!!$post['description']!!}</a>
                            </div>
                            @endif
                             @endforeach
                        </div>
                    </div>

                    <!-- End Single Service -->


                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40 text-center">
                        <div class="service service_2 the-service ">
{{--                            <img src="images/icons/nexcom-business.png" alt="voopo voip">&nbsp;&nbsp;--}}
                            <h2 id="card">
                                <span class="service-col">
                                <span class="service-col">
                                @foreach($posts as $post)

                                    @if($post['id']==5)
                                        {!!$post['title']!!}

                                </span>
                            </h2>
                            <div class="text-left mt--20 text-center">
                                <a class="nexcom__btn text-center" href="{{ url('/nexcom-business') }}">{!!$post['description']!!}</a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End Single Service -->

                    <!-- Start Single Service -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40 text-center ">
                        <div class="service service_3 the-service ">
{{--                            <img src="images/icons/nexcom-wifi-2.png" alt="Nexcom Wifi " style="height: 55px;">&nbsp;&nbsp;--}}

                            <h2 id="card">
                                <span class="service-col">
                                <span class="service-col">
                                @foreach($posts as $post)

                                    @if($post['id']==6)
                                        {!!$post['title']!!}



                                    <!-- <span style="font-size: 18px">{!!$post['description']!!}</span> -->
                                  <!-- <span><img src="images/icons/wifi-icon.png" alt="Nexcom Wifi" style="height: 30px"></span> -->

                            </h2>
                            <div class="text-left mt--20 text-center">
                                <a class="nexcom__btn text-center" href="{{ url('/nexcom-wifi') }}">{!!$post['description']!!}</a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End Single Service -->

                </div>
            </div>
        </div>
        <!-- End Service Area -->
    </div>
    <!-- End Service Area -->

    <!-- Start About Area -->
        @include('pages.callback')
    <!-- End About Area -->
    @include('pages.patner')
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->

@stop
