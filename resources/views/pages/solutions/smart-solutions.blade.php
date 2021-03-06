@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Nexcom - Dedicated Internet
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
                @foreach($posts as $post)
                            @if($post['id']==66)
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                        <h2 class="bradcaump-title">{!!$post['title']!!}</h2>
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p class="bradcaump-p">Home > <a href="{{ url('solutions') }}">solutions</a> > smart solutions</p>
                    </div>
                </div>
            </div>
                           @endif
                                 @endforeach
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Solution -->
    <div class="voopo__business nexcom-solutions bg--cart-4 pt--30 pb--30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 sm__mt--40">
                @foreach($posts as $post)
                            @if($post['id']==66)
                    <div class="content pl-4">
                    {!!$post['description']!!}
                    </div>
                </div>
                             @endif
                                 @endforeach
        </div>
            </div>
        </div>
    </div>
    <!-- End Solution -->

    <section id="call-to-action" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-lg-9 text-center">
                    <!-- <h3 class="cta-title">Call To Action</h3> -->
                    <p class="cta-text"> Interested? <a class="cta-btn align-middle" href="{{ url('/contact') }}">Please contact our consultants and sales reprentatives</a> </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <div class="contact-btn">
{{--                        <a href="{{ url('/contact') }}" class="call_back_btn" style="width: 90px;" type="submit">Call Us</a>--}}
                        <a class="menuItemBtn" href="{{ url('/contact') }}" style="width: 200px;"><i class="fa fa-phone"></i>&nbsp;Call Us</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Start About Area -->
        @include('pages.callback')
    <!-- End About Area -->
    @include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
