

<nav class="mainmenu__nav">

<ul class="mainmenu" style="float:right;">
<!-- <li><a href="{{ url('/home') }}"><span class="d-none d-sm-block d-sm-none "><i class="fa fa-home"></i></span><span class="d-lg-none d-xl-none d-md-none">Home</span> </a></li> -->

    <!-- <li><a class="{{ url()->current() == url('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li> -->
    <li class="drop nav-item">
    @if(is_array($posts)  || is_object($posts))
    @foreach($posts as $post)

                        @if($post['id']==9)

        <a class="nav-link" data-toggle="dropdown" href="#">{!!$post['title']!!}</a>
                          @endif
                         @endforeach

        <ul class="dropdown__menu">
            <li><a class="dropdown-item" href="{{ url('/nexcom-home') }}">Residential Internet</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item"  href="{{ url('/nexcom-business') }}">Business Internet</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item"  href="{{ url('/solutions') }}">Enterprise Solutions</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item"  href="{{ url('/nexcom-wifi') }}">Nexcom WiFi</a></li>
        </ul>
    </li>

    <li class="drop">
    @foreach($posts as $post)
                        @if($post['id']==10)
        <a href="#">{!!$post['title']!!}</a>
                            @endif
                            @endforeach
        <ul class="dropdown__menu">
            <li><a class=""  href="{{ url('/coming-soon') }}">Smart Security & Automation</a></li>
            <div class="dropdown-divider"></div>
            <li><a class=""  href="{{ url('/coming-soon') }}">Managed Network Services</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="" href="{{ url('/coming-soon') }}">Domain & Hosting Services</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="" href="{{ url('/coming-soon') }}">SME Cloud Applications</a></li>

        </ul>
    </li>


    <li>
        {{--<a class="{{ url()->current() == url('/network-coverage') ? 'active' : '' }}" href="{{ url('/network-coverage') }}">Network Coverage</a>--}}

         {{--<a class="{{ url()->current() == url('/network-coverage') ? 'active' : '' }}" href="https://nexcom.co.ke/">Network Coverage</a>--}}
    </li>


    <!-- <li><a href="{{ url('/FAQs') }}">FAQs</a></li> -->


    @endif

    <li><a href="{{ url('/tecshop') }}">Tecshop</a></li>

    {{-- <li><a href="{{ url('/platform') }}">Platform</a></li> --}}

    <li>
                     @foreach($posts as $post)
                        @if($post['id']==11)
                        <!-- class="{{ url()->current() == url('/contact') ? 'active' : '' }}" -->
        <a href="{{ url('/contact') }}">{!!$post['title']!!}</a>
                             @endif
                             @endforeach
    </li>
    <li><a id="log_sign" href="https://nexcom.me/NexcomCustomerPortal/" target="_blank" rel="noopener noreferrer"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;My Nexcom Sign In</a></li>

</ul>
</nav>

<!-- <script>

$(document).ready(function () {
const $links = $('.mainmenu__nav ul li a');
$.each($links, function (index, link) {
if (link.href == document.URL) {
  $(this).addClass('active');
}
});
});

</script> -->
