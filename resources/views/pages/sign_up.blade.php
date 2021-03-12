@extends('layouts.default3')

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
    <div class="slider__area slider--one bg">
        <div class="slide__activation">
            <!-- Start Single Slide -->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 text-center">

                        <a href="{{ url('/nexcom') }}">
                            <img src="images/logo/nexcom.png" alt="seacom">
                        </a>

                        <section id="tabs" class="project-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-1"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 pt--50">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-home" aria-selected="true">Sign Up</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-profile" aria-selected="false">Login in</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-signup" role="tabpanel" aria-labelledby="nav-home-tab">

                                                <div class="row centered-form pt--50">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title"><small>Fill this form to create an account</small></h3>
                                                            </div>
                                                            <div class="panel-body">
                                                                <form role="form">
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="number" name="tel" id="tel" class="form-control input-sm" placeholder="Phone Number">
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                                                            <div class="form-group">
                                                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <input type="submit" value="Register" class="btn btn-info btn-block">

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-login" role="tabpanel" aria-labelledby="nav-profile-tab">

                                                <div class="row centered-form pt--50">
                                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title"><small>Sign in</small></h3>
                                                            </div>
                                                            <div class="panel-body">
                                                                <form role="form">

                                                                    <div class="form-group">
                                                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                                                    </div>

                                                                    <input type="submit" value="Login" class="btn btn-info btn-block">

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-12 bg-image--home">
                        <nav class="mainmenu__nav" style="display: block;">
                            <ul class="mainmenu">
                                <!-- <li><a href="http://127.0.0.1:8020/home"><span class="d-none d-sm-block d-sm-none "><i class="fa fa-home"></i></span><span class="d-lg-none d-xl-none d-md-none">Home</span> </a></li> -->

                                <li><a class="" href="http://127.0.0.1:8020">Home</a></li>
                                <li class="drop">
                                    <a href="http://127.0.0.1:8020">Get Internet</a>
                                    <ul class="dropdown__menu">

                                        <li><a href="http://127.0.0.1:8020/nexcom-business">For Business</a></li>
                                        <li><a href="http://127.0.0.1:8020/nexcom-home">For Home</a></li>
                                    </ul>
                                </li>
                                <li>
                                </li><li><a class="" href="http://127.0.0.1:8020/nexcom-wifi">Nexcom WiFi</a></li>

                                <li>
                                    <a class="" href="http://127.0.0.1:8020/contact">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="content2 text-center" style="height: 620px">
                            <h1 style="padding-top: 300px; color: #ffffff">Sign Up <br>to Connect</h1>
                        </div>
                        {{--<div class="slide__fornt__img">
                            <img src="images/banner/s1.png" alt="voopo voip">
                        </div>--}}
                        <div class="copyright__inner">
                            {{--                        <p><span class="float-right">Powered By:  <img src="images/logo/seacom.png" alt="seacom" style="height: 22px;"></span><span class="float-left"> Copyright © Nexcom, 2020. All Rights Reserved. A Product of <a href="https://www.directcore.com/">Directcore Technologies Limited</a></span> </p>--}}
                            <p><span class="float-right"> A Product of <a href="https://www.directcore.com/">Directcore Technologies Limited</a> </span>  </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
