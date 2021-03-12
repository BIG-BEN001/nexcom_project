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
                                                <!--
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-profile" aria-selected="false">Login</a>
                                                 -->
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
                                                                <form id="contact-forms" action="{{ url('/get-in-touch') }}" method="post" role="form">
                                                                    @csrf
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
                                                                        <input type="text" name="tel" id="tel" class="form-control input-sm" placeholder="Phone Number">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <select class="form-control" id="region" name="region">
                                                                            <option value="select-region">Select Region</option>
                                                                            <option value="Baringo">Baringo</option>
                                                                            <option value="Bomet">Bomet</option>
                                                                            <option value="Bungoma">Bungoma</option>
                                                                            <option value="Busia">Busia</option>
                                                                            <option value="Elgeyo-Marakwet">Elgeyo-Marakwet</option>
                                                                            <option value="Embu">Embu</option>
                                                                            <option value="Garissa">Garissa</option>
                                                                            <option value="Homa Bay">Homa Bay</option>
                                                                            <option value="Isiolo">Isiolo</option>
                                                                            <option value="Kajiado">Kajiado</option>
                                                                            <option value="Kakamega">Kakamega</option>
                                                                            <option value="Kericho">Kericho</option>
                                                                            <option value="Kiambu">Kiambu</option>
                                                                            <option value="Kilifi">Kilifi</option>
                                                                            <option value="Kirinyaga">Kirinyaga</option>
                                                                            <option value="Kisii">Kisii</option>
                                                                            <option value="Kisumu">Kisumu</option>
                                                                            <option value="Kitui">Kitui</option>
                                                                            <option value="Kwale">Kwale</option>
                                                                            <option value="Laikipia">Laikipia</option>
                                                                            <option value="Lamu">Lamu</option>
                                                                            <option value="Machakos">Machakos</option>
                                                                            <option value="Makueni">Makueni</option>
                                                                            <option value="Mandera">Mandera</option>
                                                                            <option value="Marsabit">Marsabit</option>
                                                                            <option value="Meru">Meru</option>
                                                                            <option value="Migori">Migori</option>
                                                                            <option value="Mombasa">Mombasa</option>
                                                                            <option value="Murang" a'="">Murang'a</option>
                                                                            <option value="Nairobi">Nairobi</option>
                                                                            <option value="Nakuru">Nakuru</option>
                                                                            <option value="Nandi">Nandi</option>
                                                                            <option value="Narok">Narok</option>
                                                                            <option value="Nyamira">Nyamira</option>
                                                                            <option value="Nyandarua">Nyandarua</option>
                                                                            <option value="Nyeri">Nyeri</option>
                                                                            <option value="Samburu">Samburu</option>
                                                                            <option value="Siaya">Siaya</option>
                                                                            <option value="Taita–Taveta">Taita–Taveta</option>
                                                                            <option value="Tana River">Tana River</option>
                                                                            <option value="Tharaka-Nithi">Tharaka-Nithi</option>
                                                                            <option value="Trans-Nzoia">Trans-Nzoia</option>
                                                                            <option value="Turkana">Turkana</option>
                                                                            <option value="Uasin Gishu">Uasin Gishu</option>
                                                                            <option value="Vihiga">Vihiga</option>
                                                                            <option value="Wajir">Wajir</option>
                                                                            <option value="West Pokot">West Pokot</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="text" name="apartment" id="apartment" class="form-control input-sm" placeholder="Apartment/Mall/Estate">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="text" name="road" id="road" class="form-control input-sm" placeholder="Road/Street">
                                                                    </div>


                                                                    <input type="submit" value="Submit" class="btn btn-info btn-block">

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

                        <div class="content2 text-center mt--50" style="height: 620px">
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
