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
                        <h2 class="bradcaump-title" style="font-size: 28px"> Payments</h2>

                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">

                        <p class="bradcaump-p" style="font-size: 16px">Submit a Purchase Request Below</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->


    <div class="voopo__address bg--cart-10" style="background: #f4f6f7">
        <div class="container">
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissable mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Successs:</strong> {{ $message }}
                </div>
            @endif
            <form id="contact-forms" method="post" action="{{ url('/payments_post') }}">
                @csrf
                <div class="row justify-content-center">

                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="voopo__contact__form">
                            <div >
                                <div class="single-contact-form">
                                    <input type="text" name="account" id="account" placeholder="Account Number*">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="email" id="email" placeholder="E-mail">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name">
                                </div>
                                <!-- <div class="single-contact-form">
                                    <input type="email" name="email" placeholder="Last Name">
                                </div> -->
                                <!-- <div class="single-contact-form message">
                                    <textarea name="address"  placeholder="Your Postal Address"></textarea>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="voopo__contact__form">
                            <div>
                                <div class="single-contact-form">
                                    <input type="text" name="amount" id="amount"  placeholder="Enter Amount">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="last_name" id="last_name"  placeholder="Last Name">
                                </div>
                                <!-- <div class="single-contact-form">
                                    <input type="text" name="town" placeholder="Town/City">
                                </div> -->

                            </div>
                            <br>
                            <div class="contact-btn mb-3 row">
                                <button class="menuItemBtn" type="submit">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
