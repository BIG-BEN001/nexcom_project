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

    <!-- Start Contact Area -->
    <div class="voopo__contact ptb--110" style="height: 100%">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 bac">
                    <div class="voopo__contact__form">
                        <h2>If you need to contact us, Please fill out the form below.</h2>
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="single-contact-form">
                                <input type="text" name="name" placeholder="Type Your Name">
                            </div>
                            <div class="single-contact-form">
                                <input type="email" name="email" placeholder="Type Your e-mail">
                            </div>
                            <div class="single-contact-form message">
                                <textarea name="message"  placeholder="Type Your Message"></textarea>
                            </div>
                            <div class="contact-btn">
                                <button class="voopo__btn" type="submit">Send</button>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 bg-image--home" style="height: 100%">
                    <div class="contact__thumb">
                        <img src="images/about/contact.png" alt="voopo voip">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- put scripts gera -->
@stop
