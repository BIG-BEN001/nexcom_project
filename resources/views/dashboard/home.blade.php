<!DOCTYPE html>
<html lang="en">
@include('dashboard.header')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('dashboard.navbar')


        @include('dashboard.sidebar')


        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">

                    @yield('content')
                    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
                </div>
            </section>
        </div>


        @include('dashboard.footr')



        @include('dashboard.scripts')
    </div>
</body>
</html>
