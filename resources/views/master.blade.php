<!DOCTYPE html>
<html class="js grunticon translated-ltr" lang="en">
    <head prefix="og: http://ogp.me/ns#">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- OneTrust Cookies Consent Notice start -->
        <link rel="stylesheet" href="{{ asset('css/icons.data.svg.css') }}" media="all">
        <!-- OneTrust Cookies Consent Notice end -->
        <title>UK Property Community</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="UK Property Community">
        <meta name="google" content="nositelinkssearchbox">
        <meta name="format-detection" content="telephone=no">
        <!-- Load A/B Testing -->
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/index-fundawonen.css') }}" rel="stylesheet" type="text/css">
        @yield('css')
    </head>
    <body>
        <!-- Header Section Start-->
        @include('header')
        <!-- Header Section End-->
        <!-- Content Section Start-->
        <main id="content" role="main">
        @yield('content')
        </main>
        <!-- Content Section End-->
        <!-- Footer Section Start-->
        @yield('footer')
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        @yield('js')
        <!-- Footer Section End-->
    </body>
</html>