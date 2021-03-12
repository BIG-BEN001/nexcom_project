
<footer id="footer" class="footer-area footer--2">

    <div class="footer__top bg--cart-7 foot-1" style="background: #747474">
        <div class="container">
            <div class="row">
                <!-- Start Single Wedget -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">


                    <div class="single__wedget">
                    @if(is_array($posts)  || is_object($posts))

                    @foreach($posts as $post)
                                    @if($post['id']==45)
                        <div class="logo">

                            <a href="{{ url('/') }}">

                            {!!$post['title']!!}
                            </a>
{{--                                <p style="color: #fff;"><span class="">Internet Powered By:  <img src="images/logo/seacom.png" alt="seacom" style="height: 22px;"></span> </p>--}}

                            <div class="content">

                                <p>{!!$post['description']!!}</p>
                                @endif
                              @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Wedget -->
                <!-- Start Single Wedget -->

                                 @foreach($posts as $post)
                                    @if($post['id']==40)
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12 sm__mt--40 md__mt--40">
                    <div class="single__wedget">
                        {!!$post['title']!!}

                        {!!$post['description']!!}
                    </div>
                </div>
                                 @endif
                              @endforeach

                <!-- End Single Wedget -->
                <!-- Start Single Wedget -->

                                @foreach($posts as $post)
                                    @if($post['id']==41)
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12 sm__mt--40 md__mt--40">
                    <div class="single__wedget">
                    {!!$post['title']!!}
                        {!!$post['description']!!}
                    </div>
                </div>

                             @endif
                              @endforeach
                              @endif
                <!-- End Single Wedget -->
                 <!-- Start Single Wedget -->
                <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="single__wedget">
                        <h2 class="ft__title">Links</h2>
                        <ul class="ft__contact__link">
                            <li>
                                <a href="{{ url('/about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('/FAQs') }}">FAQs</a>
                            </li>
                            <li>
                                <!-- <a href="{{ url('privacy-policy') }}">Privacy Policy</a> -->
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{ url('terms-and-conditions') }}">Terms And Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Wedget -->
            </div>
        </div>
    </div>
    @include('layouts.copyright')

</footer>


