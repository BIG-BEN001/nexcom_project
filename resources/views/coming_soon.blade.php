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
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px;*/">
                        <h3 class="bradcaump-title">{{ $hold ?? 'Coming Soon' }} </h3>

                        <!--
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p class="bradcaump-p">Home > products > for business</p>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    @include('coming_soon_temp')

    <!-- Start About Area -->
    @include('pages.callback')

    <!-- End About Area -->
    @include('pages.patner')
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
