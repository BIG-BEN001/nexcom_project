<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Nexcom - Internet Services </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Google font (font-family: 'Ubuntu', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,500i,700" rel="stylesheet">

    @include('layouts.pages_css')
    @yield('header_styles')
</head>

<body>

<!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
            <!-- Header -->
        @include('layouts.header')
        <!-- //Header -->
            @yield('content')

        <!-- Footer Area -->
        @include('layouts.copyright')
        <!-- //Footer Area -->

    </div>
<!-- //Main wrapper -->

    @include('layouts.pages_js')
    @yield('footer_scripts')
</body>

</html>
