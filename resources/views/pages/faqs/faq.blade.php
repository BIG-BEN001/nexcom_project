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
                        <div class="bradcaump__inner text-center" style="">
                                       @foreach($posts as $post)
                                            @if($post['id']==49)
                            <h2 class="bradcaump-title">{!!$post['title']!!}</h2>
                            @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Service Area -->
    <div class="faqs service--2 pb--20 pt--40 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                                     @foreach($posts as $post)
                                            @if($post['id']==49)
                    <div class="section__title--call text-center">
                        <h3>{!!$post['description']!!}</h3>
                                @endif
                                @endforeach
                    </div>
                </div>
            </div>
            <div class="row mt--20 align-items-center">
                <!-- Start Single Service -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 text-center">
                    <div class="service">
                        <a href="{{ url('/FAQs-General') }}">
                            <img src="images/faqs/General Icon.png" alt="voopo voip">
                            <p>General</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="service">
                        <a href="{{ url('/FAQs-Payments') }}">

                            <img src="images/faqs/Payments Icon.png" alt="voopo voip">
                            <p>Payments</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->

            </div>
            <div class="row mt--50 align-items-center">

                <!-- Start Single Service -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="service">
                       <a href="{{ url('/FAQs-Product-Services') }}">
                            <!-- <a href="https://nexcom.co.ke/"> -->
                            <img src="images/faqs/Product and Services Icon.png" alt="voopo voip">
                            <p>Product and Services</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                    <div class="service">
{{--                        <a href="{{ url('/FAQs-Technical-Issues') }}">--}}
                        <a href="https://nexcom.co.ke/">
                        <img src="images/faqs/Technical Issues Icon.png" alt="voopo voip">
                            <p>
                                Technical Issues
                            </p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
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
