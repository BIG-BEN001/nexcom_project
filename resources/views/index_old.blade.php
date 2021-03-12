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
    <div class="slider__area slider--2 tops">
        <div class="container">
            {{--            0722987615--}}
        </div>
        <div class="slide__activation">
            <!-- Start Single Slide -->
            <div class="slide slider_fixed_height gra__bg--1 d-flex align-items-center">

                <div class="container-fluid">
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
                                         alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Light mask</h3>
                                    <p>First text</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg"
                                         alt="Second slide">
                                    <div class="mask rgba-black-strong"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Strong mask</h3>
                                    <p>Secondary text</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
                                         alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                                <div class="carousel-caption">
                                    <h3 class="h3-responsive">Slight mask</h3>
                                    <p>Third text</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->
                        <!--Controls-->
                        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                    <!--
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-5 col-md-6 col-sm-6 col-12">
                            <div class="content">
                                <h1 data-shadow='Fastest Way To Share Your Voice.'>Experience the Difference.</h1>
                                {{--                                <p>On the other</p>--}}
                                {{--                                <a class="voopo__btn btn--org" href="#">Learn More</a>--}}
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-md-6 col-sm-6 col-12">
                            <div class="slide__fornt__img">
                                {{--<img src="images/banner/s2.png" alt="voopo voip">--}}
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Start Service Area -->
    <div class="voopo__service__video bg--cart-9">
        <!-- Start Service Area -->
        <div class="voopo__service service__position service--2">
            <div class="container">
                <div class="row">
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service service_1">
                            <img src="images/icons/s2.png" alt="voopo voip">&nbsp;&nbsp;
                            <h2>
                                <span class="service-col">Internet for Business</span>
                            </h2>
                            <p>At vero eos accusamus iusto odio dignissims ducimus blanditiis praesentium voluptatum deleniti
                                atque corrupti dolores et quas.</p>
                            <div class="text-left mt--20">
                                <a class="nexcom__btn text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40">
                        <div class="service service_2">
                            <img src="images/icons/s1.png" alt="voopo voip">&nbsp;&nbsp;
                            <h2>
                                <span class="service-col">Internet for Home</span>
                            </h2>
                            <p>At vero eos accusamus iusto odio dignissims ducimus blanditiis praesentium voluptatum deleniti
                                atque corrupti dolores et quas.</p>
                            <div class="text-left mt--20">
                                <a class="nexcom__btn text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service -->
                    <!-- Start Single Service -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                        <div class="service service_3">
                            <img src="images/icons/s3.png" alt="voopo voip">&nbsp;&nbsp;
                            <h2>
                                <span class="service-col">Nexcom WiFi</span>
                            </h2>
                            <p>At vero eos accusamus iusto odio dignissims ducimus blanditiis praesentium voluptatum deleniti
                                atque corrupti dolores et quas.</p>
                            <div class="text-left mt--20">
                                <a class="nexcom__btn text-center" target="_blank" href="https://nexcom.co.ke/">Get Connected</a>
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
    <!-- Start About Area -->
    <div class="nexcom_call_action position-relative bg--cart-11">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center">
                    <div class="about__inner">
                        <div class="section__title--call">
                            <h2>Questions?</h2>
                            <p>Give us a shout out <br><i class="fa fa-phone"></i>0700 123 456<br>sales@directcore.com </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 mt--20" style="background: #ebebeb">
                    <div class="about__inner">
                        <div class="section__title--call">
                            <h3>Request a call back</h3>
                            <form id="contact-form" class="form-inline" action="mail.php" method="post">
                                <div class="col-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="inputCity" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control" id="inputZip" placeholder="Second Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="inputZip" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                                <label class="form_interest" for="">
                                                    Interested in Internet Access
                                                </label>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    For Home
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    For Business
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck2">
                                                <label class="form-check-label" for="gridCheck2">
                                                    Nexcom WiFi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="call_back_btn" style="border: none;width: 90px" type="submit">Send</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->
    {{--    @include('layouts.footer2')--}}
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
