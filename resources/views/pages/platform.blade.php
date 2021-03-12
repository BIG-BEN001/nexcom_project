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
<div style="background-color:#f5f6fa">
    <!-- Start Bradcaump area -->
    <div class="pr__bradcaump__area pr__bradcaump__home bg-image--home_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center" style="/*margin-top: 170px*/">
                        <h2 class="bradcaump-title">Our Platform</h2>
                        <hr style="background: #ffffff99;margin-left: 520px;margin-right: 520px;margin-bottom: 5px;margin-top: 10px;height: 2px;">
                        <p style="line-height: 40px;"><span style="font-size: 16px;"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<div class="page page-tools base-container">
    <div class="mobile-padding top-section bg-white start-1 padding-1 padding-right-1 max-width">
        <div class="content content--content-builder redactor">
            <h3 class="redactor headings">Through GINius, Globalinternet’s digital platform, we continue to automate and streamline customer-facing processes:</h3></div>
            <div class="home__services-holder home__services-holder--no-link float-group"><a class="home__service">
                <div class="home__service-inner">
                    <div class="service__icon-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 40 40" xml:space="preserve">
                        <g><path d="M17.9,0.5c-1,0.2-2,0.5-2.9,0.9L15.3,2l0.2,0.6c0.9-0.4,1.8-0.7,2.7-0.9l-0.1-0.6L17.9,0.5z" class="st0"></path> <path d="M28.6,1.9l-0.2,0.6c0.9,0.4,1.7,0.8,2.5,1.3l0.3-0.5l0.3-0.5c-0.9-0.5-1.8-1-2.7-1.4L28.6,1.9z" class="st0"></path>
                        <path d="M22,0l0,0.4l0,0.2l0,0.6c0.9,0,1.9,0.1,2.8,0.2l0.1-0.6L25,0.3C24,0.1,23,0,22,0C22,0,22,0,22,0z" class="st0"></path>
                        <path d="M34.7,5.3l-0.4,0.4l-0.4,0.4c0.7,0.7,1.3,1.4,1.8,2.1l0.5-0.4l0.5-0.4C36.1,6.8,35.4,6,34.7,5.3z" class="st0"></path>
                         <path d="M39.4,18l-0.6,0c0,0.9-0.1,1.9-0.2,2.8l0.6,0.1l0.6,0.1c0.2-1,0.2-2,0.2-3v0L39.4,18z" class="st0"></path>
                         <path d="M38.9,14.1l0.6-0.1c-0.2-1-0.5-1.9-0.9-2.9L38,11.3l-0.6,0.2c0.4,0.9,0.6,1.8,0.9,2.7L38.9,14.1z" class="st0"></path>
                          <path d="M22,34.8c-0.9,0-1.9-0.1-2.8-0.2l-0.1,0.6L19,35.8c1,0.2,2,0.2,3,0.2h0l0-0.6L22,34.8z" class="st0"></path> <path d="M37.5,24.4c-0.4,0.9-0.8,1.7-1.3,2.5l0.5,0.3l0.5,0.3c0.5-0.9,1-1.8,1.4-2.7l-0.6-0.2L37.5,24.4z" class="st0"></path>
                           <path d="M28.4,33.5c-0.9,0.4-1.8,0.7-2.7,0.9l0.1,0.6l0.1,0.6c1-0.2,1.9-0.5,2.9-0.9L28.7,34L28.4,33.5z" class="st0"></path> <path d="M33.9,29.8c-0.7,0.7-1.4,1.3-2.1,1.8l0.4,0.5l0.4,0.5c0.8-0.6,1.6-1.2,2.3-2l-0.4-0.4L33.9,29.8z" class="st0"></path>
                            <path d="M5.2,18c0-0.9,0.1-1.8,0.2-2.8l-0.6-0.1L4.2,15C4.1,16,4,17,4,18v0.1l0.6,0L5.2,18z" class="st0"></path> <path d="M6.5,11.6c0.4-0.9,0.8-1.7,1.3-2.5L7.3,8.8L6.7,8.5c-0.5,0.9-1,1.8-1.4,2.7l0.6,0.2L6.5,11.6z" class="st0"></path>
                            <path d="M10.1,6.2c0.7-0.7,1.4-1.3,2.1-1.8l-0.4-0.5l-0.4-0.5c-0.8,0.6-1.6,1.2-2.3,2l0.4,0.4L10.1,6.2z" class="st0"></path> <path d="M9,22c-1.1,0-2.1,0.2-3.1,0.6c-0.1-0.3-0.2-0.5-0.2-0.8l-0.6,0.1l-0.6,0.1c0.1,0.3,0.2,0.7,0.3,1   C1.9,24.6,0,27.6,0,31c0,5,4,9,9,9c3.6,0,6.8-2.2,8.2-5.3c0.5-1.1,0.8-2.4,0.8-3.7C18,26,14,22,9,22z M16,34.3   c-1.2,2.6-3.9,4.5-7,4.5c-4.3,0-7.8-3.5-7.8-7.8c0-2.9,1.6-5.4,3.9-6.7c0.2-0.1,0.4-0.2,0.6-0.3c0.2-0.1,0.4-0.2,0.6-0.2   C7.1,23.4,8,23.3,9,23.3c4.3,0,7.8,3.5,7.8,7.8C16.8,32.2,16.5,33.3,16,34.3z" class="st0"></path></g>
                        </svg>
                    </div>
                    <div class="service_title">
                        <h3 class="headings">Manage Scale</h3>
                    </div>
                    <div class="service__text redactor">
                        <p class="paragraphs">Search for new locations, request for a quote and order new services.</p>
                    </div>
                </div>
            </a>
            <a class="home__service">
                <div class="home__service-inner">
                    <div class="service__icon-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none">
                        <circle cx="3" cy="27" r="2.375" stroke="#0043FF" stroke-width="1.25">

                        </circle>
                        <circle cx="14" cy="19" r="2.375" stroke="#0043FF" stroke-width="1.25"></circle>
                        <circle cx="25" cy="26" r="2.375" stroke="#0043FF" stroke-width="1.25"></circle>
                         <circle cx="37" cy="12" r="2.375" stroke="#0043FF" stroke-width="1.25"></circle>
                          <path d="M12 20.5l-6.636 5.009M35.506 14.368L26.5 24.5M23 25l-7-5" stroke="#0043FF" stroke-width="1.25"></path></svg>
                        </div>
                        <div class="service_title">
                            <h3 class="headings">Manage your finances <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__title-arrow"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.41502 -0.000214639L4.14498 2.72714L5.56 4.14028L4.14498 5.55343L1.41502 8.27979L-6.17706e-08 6.86664L2.72996 4.14028L-3.00072e-07 1.41493L1.41502 -0.000214639Z"></path></svg>
                        </h3
                        ></div>
                        <div class="service__text redactor">
                            <p class="paragraphs">Keep track of all invoices – fully detailed, in the currency of your choice and in one single place.</p>
                        </div>
                    </div></a>
                     <a class="home__service"><div class="home__service-inner">
                         <div class="service__icon-holder"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 40 40" xml:space="preserve"><g><path d="M20,0C9,0,0,9,0,20c0,11,9,20,20,20c11,0,20-9,20-20C40,9,31,0,20,0z M20,1.3c10.3,0,18.8,8.4,18.8,18.8   c0,4.6-1.7,8.9-4.5,12.1c-3.9-3.7-8.9-5.8-14.3-5.8c-5.4,0-10.4,2.1-14.3,5.8C2.9,28.9,1.2,24.6,1.2,20C1.2,9.7,9.7,1.3,20,1.3z    M20,38.8c-5.3,0-10-2.2-13.4-5.7c3.6-3.5,8.4-5.4,13.4-5.4c5.1,0,9.8,1.9,13.4,5.4C30,36.6,25.3,38.8,20,38.8z" class="st0"></path>
                          <path d="M20,23c1.7,0,3-1.3,3-3c0-0.6-0.2-1.1-0.5-1.6l3.9-4.6l-1-0.8l-3.9,4.5C21.2,17.2,20.6,17,20,17   c-1.7,0-3,1.3-3,3S18.3,23,20,23z M20,18.3c1,0,1.8,0.8,1.8,1.8S21,21.8,20,21.8S18.2,21,18.2,20S19,18.3,20,18.3z" class="st0"></path>
                           <rect x="20" y="5" width="1.2" height="2.5" class="st0"></rect>
                           <rect x="26.4" y="8.1" transform="matrix(0.5002 -0.8659 0.8659 0.5002 6.2956 28.2674)" width="2.5" height="1.2" class="st0"></rect>
                            <rect x="31.3" y="13.5" transform="matrix(0.8661 -0.4998 0.4998 0.8661 -2.6842 18.1811)" width="2.5" height="1.3" class="st0"></rect>
                            <rect x="32.5" y="21" width="2.5" height="1.2" class="st0"></rect>
                            <rect x="4.5" y="21" width="2.5" height="1.2" class="st0"></rect>
                            <rect x="6.5" y="12.7" transform="matrix(0.5 -0.866 0.866 0.5 -8.5105 13.1356)" width="1.3" height="2.5" class="st0"></rect>
                            <rect x="11.6" y="7.1" transform="matrix(0.866 -0.5 0.5 0.866 -2.5641 7.2268)" width="1.3" height="2.5" class="st0"></rect></g>
                        </svg></div>
                        <div class="service_title">
                            <h3 class="headings">Manage your network <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg" class="service__title-arrow">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41502 -0.000214639L4.14498 2.72714L5.56 4.14028L4.14498 5.55343L1.41502 8.27979L-6.17706e-08 6.86664L2.72996 4.14028L-3.00072e-07 1.41493L1.41502 -0.000214639Z"></path></svg>
                        </h3>
                    </div>
                     <div class="service__text redactor">
                         <p class="paragraphs">A full overview of your install-base, including services that are live, cancelled or in progress.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="page content-builder base-container">
            <div class="photo-block__holder content-builder__block">
                <section class="photo-block photo-block--content photo-block--reverse col-14 float-group  photo-block--has-cta">
                    <div class="photo-block__content">
                        <div id="full_t" class="mobile-padding bg-white photo-block-text col-7 padding-1 padding-right-1">
                            <div class="inner redactor">
                                <h2 class="main-title photo-block-title">Full transparency: what set us apart from the beginning.</h2>
                                <ul>
                                    <li><strong>View of all available service</strong>s in your desired locations.</li>
                                    <li>Obtain customised reports on your <strong>performance, services and global sites</strong>.
                                </li>
                                <li><strong>Access to all invoice</strong>s, fully-detailed and in the format of your choice.</li>
                                <li><strong>Order details</strong>: real-time information on order status.</li>
                            </ul>
                        </div>
                    </div>
                     <!-- <div class="button-holder button-holder--photo-block">
                         <a href="https://koi-3QNMFZCI16.marketingautomation.services/net/m?md=o5F0hMuTq4qNWGSeJcuUQvvfy1wM39qV" target="_blank" class="button photo-block-cta">
                         <span class="button__text">Download more info</span></a>
                        </div> -->
                    </div>
                    <div class="photo-block-image-holder col-7">
                        <picture>
                            <source data-srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11743/Block-Platform-hipster-896x794_4a38658487add65819c272eb84158baf.webp" type="image/webp" srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11743/Block-Platform-hipster-896x794_4a38658487add65819c272eb84158baf.webp">
                                <source data-srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11743/Block-Platform-hipster-896x794_4379a102da6f7b87fed761e8495db799.jpg" srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11743/Block-Platform-hipster-896x794_4379a102da6f7b87fed761e8495db799.jpg">
                                    <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27896%27%20height%3D%27794%27%20style%3D%27background%3Argb%28254%2C%20254%2C%20254%29%27%2F%3E" alt="" class="photo-block-image lazyloaded"></picture>
                                </div>
                            </section>
                        </div>


                </section>
            </div>


                </div>
            </div>
        </div>
    </div>
    <div class="page content-builder base-container">
        <div class="photo-block__holder content-builder__block">
            <section class="photo-block photo-block--content  col-14 float-group  photo-block--has-cta">
                <div class="photo-block__content">
                    <div id="full_t2"class="mobile-padding bg-white photo-block-text col-7 padding-1 padding-right-1">
                        <div class="inner redactor">
                            <h2 class="main-title photo-block-title">What you need – when you need it.</h2>
                             <ul>
                                 <li><strong>Order online: </strong>no need for emails or picking up the phone.</li>
                                 <li><strong>Auto-budgetary quoting:</strong> in near real-time.</li>
                                 <li><strong>Quote requests:</strong> send budgetary quotes to our team to be turned into firm quotes.</li>
                                 <li><strong>24/7 support:</strong> raise and follow-up incidents.</li>
                             </ul>
                            </div>
                        </div>
                        <!-- <div id="btn_demo"class="button-holder button-holder--photo-block">
                            <a href="https://globalinter.net/platform#request-demo" class="button photo-block-cta">
                            <span class="button__text">Request a demo</span>
                        </a>
                    </div> -->
                </div>
                <div id="photo2" class="photo-block-image-holder col-7">
                    <picture>
                        <source data-srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11670/Block-Luis-and-Mahmoud-896x794_4a38658487add65819c272eb84158baf.webp" type="image/webp" srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11670/Block-Luis-and-Mahmoud-896x794_4a38658487add65819c272eb84158baf.webp">
                             <source data-srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11670/Block-Luis-and-Mahmoud-896x794_4379a102da6f7b87fed761e8495db799.jpg" srcset="https://globalinter.net/storage/images/transforms/photoblocksimages/11670/Block-Luis-and-Mahmoud-896x794_4379a102da6f7b87fed761e8495db799.jpg">
                                 <img src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20width%3D%27896%27%20height%3D%27794%27%20style%3D%27background%3Argb%28254%2C%20254%2C%20254%29%27%2F%3E" alt="" class="photo-block-image ls-is-cached lazyloaded">
                    </picture>
                </div>
            </section>
            <br> <br> <br>
            <div class="bg-white content-builder__block ">
                <div class="story-info story-info--information content-holder mobile-padding padding-3 padding-right-3 content-max-width">
                    <div class="story-info__inner" style="min-height: 375px;">
                    <h2 class="main-title story-info__title">Learn more about our GINius Platform</h2>
                    <!-- <div class="story-info__text">
                        <p style="color:black;"> Leave us your details below so we can contact you to schedule a demo.</p>
                    </div> -->

            </div>
        </div>
    </div>
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
