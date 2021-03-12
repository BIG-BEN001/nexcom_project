
<nav class="main-header navbar navbar-expand navbar-white navbar-light" id="nb">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">



            <a href="/nexcom" class="nav-link"><p style="color:#023047">Visit Nexcom Website</p></a>

        </li>
    </ul>


    <ul class="navbar-nav ml-auto">
    @if(auth()->user())
    <p Style="color: #E8960D;"><b>{{ Auth::user()->name }}</b></p> <span class="caret" ></span>
    @endif
    </ul>
</nav>



