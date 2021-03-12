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
                              @foreach($posts as $post)
                                    @if($post['id']==63)

                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px;*/">
                        <h2 class="bradcaump-title" style="font-size: 28px">{!!$post['title']!!}</h2>

                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">

                        <p class="bradcaump-p" style="font-size: 16px"> {!!$post['description']!!}</p>
                    </div>
                                @endif
                                 @endforeach
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
            <form id="contact-forms" action="{{ url('/subscribe/home') }}" method="post">
                @csrf
                <div class="row justify-content-center">

                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="voopo__contact__form">
                            <div >
                                <div class="single-contact-form">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="id_no" placeholder="Your ID Number/Passport">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="tel" placeholder="Your Telephone No">
                                </div>
                                <div class="single-contact-form">
                                    <input type="email" name="email" placeholder="Your e-mail">
                                </div>
                                <div class="single-contact-form message">
                                    <textarea name="address"  placeholder="Your Postal Address"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                        <div class="voopo__contact__form">
                            <div>
                                <div class="single-contact-form">
                                    <input type="text" name="building" placeholder="Bldng name/Estate">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="apartment" placeholder="Apt/Hse no./Office No">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="road" placeholder="Road name">
                                </div>
                                <div class="single-contact-form">
                                    <input type="text" name="town" placeholder="Town/City">
                                </div>
                                <div class="single-contact-form pb--30">
                                    <input type="text" name="product" value="{{ $request->subscribe }}" readonly>
                                    <input type="hidden" name="product_type" value="home_internet">
                                </div>
                            </div>
                            <div class="contact-btn float-right mb-3">
                                <button class="menuItemBtn" type="submit">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Start About Area -->
        @include('pages.callback')
    <!-- End About Area -->
    @include('pages.patner')

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
