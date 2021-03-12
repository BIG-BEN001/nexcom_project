<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Nexcom - Internet Services </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">

    <!-- Google font (font-family: 'Ubuntu', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,500i,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    @include('layouts.pages_css')
    @yield('header_styles')
    <link rel="stylesheet" href="{{ asset('css/custom2.css') }}">
</head>

<body>

<!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
            <!-- Header -->
        @include('layouts.header')
        <!-- //Header -->
            @yield('content')

        <!-- Footer Area -->
            @include('layouts.footer')
{{--            @include('layouts.copyright')--}}

        <!-- //Footer Area -->

    </div>
<!-- //Main wrapper -->
    @include('layouts.pages_js')
    @yield('footer_scripts')
@include('notifications')

</body>

</html>
