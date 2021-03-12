<!-- <div class="col-lg-12 header-juu">
    <div class="container ">
        <strong><i class="fa fa-phone"></i>  +254 20 232 55 99 | <i class="fa fa-envelope"></i>  info@directcore.com</strong>
    </div>
</div> -->
<header id="upper_nav_header">

        <nav id="upper_nav" class="upper_nav navbar-expand-md  navbar-default">

                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> -->
                <div class="col-lg-11  clearfix visible-xs-block upper_header_ul">
                    <ul id="top_nav_ul">
                        <li class="nav-item "><p id="top_nav_font"><b id="sprt"><a href="https://api.whatsapp.com/send?phone=+254750499916&text=Hello%21%20" target="_blank"><span class="fa-lg fa fa-whatsapp" id="wa">&nbsp;</span></a></b>&nbsp;&nbsp;<span id="sp">Support: 0750499916, 0111692442;&nbsp;&nbsp;Sales: 0111636443</span></p></li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item"><a class="Btn_pay" id="btn_text" href="/payments">Pay Bills Here</a></li>
                    </ul>
                </div>

        </nav>

</header>

<header id="header-area" class="header-area header-juu2">
    <div class="container">
        <div class="row align-items-center d-none d-lg-flex">
            <div class="col-lg-2">
                <div class="logo">

                    <a href="{{ url('/') }}">

                    <a href="{{ url('/nexcom') }}">

                        <img src="{{ asset('images/logo/nexcom-logo.png') }}" alt="nexcom" style="height:50px; width:150px">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                @include('layouts.menu')
            </div>

        </div>
        <!-- Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
            <div class="logo">

                <a href="{{ url('/') }}"><img src="{{ asset('images/logo/nexcom.png') }}" alt="nexcom"></a>


            </div>
            <!-- <div class="header__btn menuItemBtn">

                <div class="dropdown">
                        <button class="menuItemBtn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> My Account
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><i class="fa fa-money"></i> Pay Here</a>
                            <a class="dropdown-item" href="https://mynexcom.net/NexcomCustomerPortal/"><i class="fa fa-sign-in"></i> Login</a>
                            <a class="dropdown-item" href="https://mynexcom.net/NexcomCustomerPortal/signup"><i class="fa fa-user-plus"></i> Sign Up</a>
                        </div>
                </div>
            </div> -->
        </div>
        <!-- Mobile Menu -->
    </div>
</header>
