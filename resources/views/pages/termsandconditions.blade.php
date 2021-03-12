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
                                            @foreach($posts as $post)
                                            @if($post['id']==56)

                        <h2 class="bradcaump-title" style="font-size: 28px"> {!!$post['title']!!}</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Voopo Business -->
    <div class="voopo__business nexcom-thanks bg--cart-4 pt--20 pb--30">
        <div class="container">
            <div class="row justify-content-start text-left">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 sm__mt--40">
                    <div class="content pl-4">
{{--                        <h3 class="title__line">Terms and Conditions </h3>--}}
                        {!!$post['description']!!}

                    </div>
                                @endif
                                @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Voopo Business -->


@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
