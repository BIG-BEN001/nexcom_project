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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<div style="background-color:#f5f6fa">
    <!-- Start Bradcaump area -->
    <div class="pr__bradcaump__area pr__bradcaump__home bg-image--home_2">
        <div class="container">
            <div class="row">
            @foreach($posts as $post)
                    @if($post['id']==125)
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                    {!!$post['title']!!}
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        {!!$post['description']!!}
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<br><br>
<div class="container">
<div id="total_price_header" class="text-center"> </div>
<br><br>
<div class="row ">

<div id=checkout_form class="col col-lg-7">
<form id="contact-forms" method="post" action="{{ route('post_checkout') }}">
    @csrf
    <h3 class='text-center'>Billing Details:</h3>
    <div id="cf" class="row ">

        <div class="col-lg-5 col-md-5 col-sm-12 col-12">

            <div class="voopo__contact__form">
                <div >
                    <div class="single-contact-form">
                        <label class="form_label" for="first_name">First Name :</label>
                         @if(auth()->guard('tecshop_signIn'))
                        <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{auth()->guard('tecshop_signIn')->user()->first_name}}" required >
                        @else
                        <input type="text" name="first_name" id="first_name" placeholder="First Name" >
                        @endif
                    </div>
                    <div class="single-contact-form">
                        <label class="form_label" for="last_name">Last Name :</label>
                         @if(auth()->guard('tecshop_signIn'))
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{auth()->guard('tecshop_signIn')->user()->last_name}}" required >
                        @else
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name" >
                        @endif
                    </div>
                    <div class="single-contact-form">
                        <label class="form_label" for="email">E-mail :</label>
                         @if(auth()->guard('tecshop_signIn'))
                        <input type="text" name="email" id="email" placeholder="E-mail" value="{{auth()->guard('tecshop_signIn')->user()->email}}" required >
                        @else
                        <input type="text" name="email" id="email" placeholder="First Name" >
                        @endif
                    </div>

                    <div class="single-contact-form">
                        <!-- <label for="phone_number">Phone Number:</label> -->
                        <input type="phone_number" name="phone_number" placeholder="Phone Number" required >
                    </div>
                    <!-- <div class="single-contact-form message">
                            <textarea name="address"  placeholder="Shipping Address"></textarea>
                        </div> -->
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
            <div class="voopo__contact__form">
                <div>
                    <div class="single-contact-form" id="form_amount">
                        <!-- <label for="amount">Total Amount</label> -->
                        <!-- <input type="text" name="amount" id="amount"  placeholder="" value="" > -->
                    </div>

                    <div class="single-contact-form">
                        <!-- <label for="region">Region:</label> -->
                        <!-- <input type="text" name="region" id="region"  placeholder="Region"  required> -->
                        <select name="region" id="region" placeholder="Select Your Region" required>
                            <option selected disabled>Select Your Region</option>
                            <option value="Meru">Meru</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="Samburu">Samburu</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Kisumu">Kisumu</option>
                        </select>
                    </div>

                    <div class="single-contact-form">
                        <input type="text" name="street_address" id="street_address" placeholder="Street Address" required >
                    </div>

                    <div class="single-contact-form" id="notes">
                        <textarea name="" id="" placeholder="Additional Information e.g. Location for delivery e.t.c."></textarea>
                    </div>

                    <!-- <div class="single-contact-form">
                        <input type="text" name="town" placeholder="Town/City">
                    </div> -->
                    <div class="single-contact-form" id="item_count">

                    </div>

                    <div class="single-contact-form" id="item_price">

                    </div>
                </div>

                <div class="contact-btn mb-3 row">
                    <button class="menuItemBtn" type="submit">Place Your Order</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>

<br>

        <div class="order_items col ">
            <h3  class="text-center">Your Order Item(s)</h3>
            <table class="table" id="checkout_table">
                <thead>
                    <tr>
                        <td class="t_head"></td>
                        <td class="t_head">Product</td>
                        <td class="t_head">Quantity</td>
                        <td class="t_head">Price</td>
                        <td class="t_head">Sub-Total</td>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        console.log("ready");
        // fetchTotal();
        fetchRecord();
        checkout_table();
    });
</script>

<br><br><br><br>
<!-- Start About Area -->
@include('pages.callback')
<!-- End About Area -->
@include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
{{--
    <div class="{{ url()->current() == url('/') ? 'nexcom_call_action' : 'nexcom_call_action_home' }} position-relative bg--cart-11">
--}}
