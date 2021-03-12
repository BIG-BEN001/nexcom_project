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
                        <h2 class="bradcaump-title">Order History</h2>
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p style="line-height: 40px;"><span style="font-size: 16px;">Your History of Completed Orders</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <br><br><br><br>
<div class="tec_page">
    <div class="container">
            @if (auth()->guard('tecshop_signIn')->user())
        <table class="table" id="history_table">
            <thead >
                <tr>
                    <td class="t_head">Image</td>
                    <td class="t_head">Product</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        @else
        <div class="text-center">
            <h3 >Your History is empty</h3>
        </div>
        @endif
        {{--
        <div class="row">
        @if (auth()->guard('tecshop_signIn')->user()->count())
            @foreach($values as $items)
            <div class="col-md-3" >
                <div class="card tec_card mb-2 border-0">

                    <img class="card-img-top card_img" src="{{ $items->image }}" style="width:200px; height:250px">
                    <div class="card-body card_body">

                        <h4 class="card-title">{{ $items->product }}</h4>
                        <p class="card-text" style="color:black;">Ksh {{ ($items->price) }}</p>
                        <div class="card-footer">
                            <button type="button" id="send_data"   onclick="postRecord('{{ $items->id }}')" class="btn btn-primary add_data" style="color:white;" ><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="text-center">
                <h3 >Your Order History is empty</h3>
            </div>
            @endif
        </div>
        --}}
    </div>
</div>
<br><br><br><br>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
$(document).ready(function(){

    orderHistory();
});
</script>
<!-- Start About Area -->
@include('pages.callback')
<!-- End About Area -->
@include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
