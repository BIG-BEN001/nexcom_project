<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
   <!-- Google Font: Source Sans Pro -->
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{ asset('css/custom2.css') }}">
  <link rel="stylesheet" type="text/css" href="lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="src/bootstrap-wysihtml5.css"></link>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tiny.cloud/1/94znnv8jlox9mcy0w2l6y34drayykqj7gffd4wz5rvzc5iiq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'image bootstrap n1ed a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker importcss jsplusInclude jsplusBootstrapEditor jsplusFileUploaderLite fontawesome noneditable',
      toolbar: 'image fontawesome a11ycheck bootstrap addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      noneditable_noneditable_class: 'fa',
      contextmenu: "bootstrap",
      bootstrapConfig: {
            iconFont: 'fontawesome5',
            imagesPath: '/images/',
        },
    //   content_css: ["{{ asset('css/custom2.css') }}", "{{ asset('css/style.css') }}"],
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      extended_valid_elements: 'span[*]',
      importcss_append: true
    });
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="nb">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/website" class="nav-link">Visit Nexcom Website</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->


<!-- ./wrapper -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" id="sb">
    <!-- Brand Logo -->
    <div >
    <a href="#" class="brand-link">
           <img src="/images/logo.png" alt="Nexcom" class="rounded-circle" style="height:85px; width:120px; background-color:#fff;">
      <!--<span class="brand-text font-weight-light">DIRECTCORE<br> TECHNOLOGIES</span>-->
    </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/page" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
              <i class="fa fa-home fa-fw" aria-hidden="true"></i>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="/form" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Create Form
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>

          <li class="nav-item has-treeview">
            <a href="/edit" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Home Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/edit_header" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Edit Header</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/edit_slider" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/edit_cards" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Cards</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/edit_callback" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Callback</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="/edit" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Get Internet
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p> Residential Internet</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/edit_banner" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Banner</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_resint" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Cards</p>
                        </a>
                    </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="/edit_slider" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Business Internet</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/edit_banner2" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Banner</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_bisint" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Cards</p>
                        </a>
                    </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Enterprise Solution</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/edit_banner3" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Banner</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_entsol" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Cards</p>
                        </a>
                    </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="/edit_callback" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Nexcom WIFI</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/edit_banner4" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Banner</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_nexwifi" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Cards</p>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href="/edit_descriptions" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Descriptions</p>
                    </a>
                 </li>
                </ul>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="/edit" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Smart CCTV Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Installation Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Support Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DNS & Hosting Services</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="/edit_contact" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Contact Us

              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/edit_callback" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Callback

              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
             Footer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/edit_fd" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Footer Description</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_fc" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Contact Us</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_fs" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Social</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/edit_fl" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p> Links</p>
                        </a>
                    </li>

                </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="/edit" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              Menu Items

              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="/edit" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              All Tables

              </p>
            </a>
          </li>

          <li class="nav-header">
          <i class="fa fa-user fa-fw"></i>
              USERS
            </li>
          <li class="nav-item">

          <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>-->
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        {{ __('Register Here') }}</a>
                                </li>
                            @endif
                        <!-- @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div> -->
                            </li>
                        @endguest
                    </ul>
          </li>

          <li class="nav-header">LOG OUT</li>
          <li class="nav-item">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger"  type="submit">Logout</button>

            </form>
          </li>

        </ul>
     </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">


             @yield('content')





        </div>
    </section>
</div>


  <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    2020 © www.directcore.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-md-block">
                        Powered by <a href="/website" target="_blank">Nexcom</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<script src="{{ asset('css/custom.js') }}"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
