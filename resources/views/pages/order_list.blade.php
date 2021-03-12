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
                        <h2 class="bradcaump-title">Tecshop</h2>
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p style="line-height: 40px;"><span style="font-size: 16px;">Order Our Devices and Accessories</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
<br>
<table>
    <tbody>
        @foreach($cart_items as $post)
        <tr>
            <td>{{$post['product']}}</td>
            <td>{!!$post['quantity']!!}</td>
            <td>{!!$post['price']!!}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>


<!-- Start About Area -->
@include('pages.callback')
<!-- End About Area -->
@include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop

