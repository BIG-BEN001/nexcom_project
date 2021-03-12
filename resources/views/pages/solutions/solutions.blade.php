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
                                @foreach($posts as $post)
                                    @if($post['id']==23)
                        <h3 class="bradcaump-title">{!!$post['title']!!}</h3>
                            @endif
                              @endforeach
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


    <!-- Start Blog Area -->
    <div class="voopo__blog__area bg--cart-5 pt--10 pb--20">
        <div class="container">
            <div class="row mt--30">
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog solution_1">
                        <div class="thumb">
                            <a href="{{ url('#') }}"><img src="images/solutions/01.jpg" alt="voopo voip"></a>
                        </div>
                        <div class="blog__inner">
                            <div class="content">
{{--                                <span>On 13 Feb 2018 / By : <a href="#">Momen</a></span>--}}
                                @foreach($posts as $post)
                                    @if($post['id']==24)
                                <h2><a href="#">{!!$post['title']!!}</a></h2>
                                <p>{!!$post['description']!!}</p>
                            </div>
                            <a class="readmore__btn" href="{{ url('/solutions/dedicated-internet') }}">{!!$post['description2']!!}</a>
                            @endif
                              @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog solution_2">
                        <div class="thumb">
                            <a href="#"><img src="images/solutions/02.jpg" alt="voopo voip"></a>
                        </div>
                        <div class="blog__inner">
                            <div class="content">
{{--                                <span>On 13 Feb 2018 / By : <a href="#">Momen</a></span>--}}
                                        @foreach($posts as $post)
                                    @if($post['id']==25)
                                <h2><a href="#">{!!$post['title']!!}</a></h2>
                                <p>{!!$post['description']!!}</p>
                            </div>
                            <a class="readmore__btn" href="{{ url('/solutions/smart-solutions') }}">{!!$post['description2']!!}</a>
                            @endif
                              @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blog solution_3">
                        <div class="thumb">
                            <a href="#"><img src="images/solutions/03.jpg" alt="voopo voip"></a>
                        </div>
                        <div class="blog__inner">
                            <div class="content">
{{--                                <span>On 13 Feb 2018 / By : <a href="#">Momen</a></span>--}}
                                    @foreach($posts as $post)
                                    @if($post['id']==26)
                                <h2><a href="#">{!!$post['title']!!}</a></h2>
                                <p>{!!$post['description']!!}</p><br>
                            </div>
                            <a class="readmore__btn" href="{{ url('/solutions/hosting') }}">{!!$post['description2']!!}</a>
                            @endif
                              @endforeach
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start About Area -->
    @include('pages.callback')

    <!-- End About Area -->
    @include('pages.patner')
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
