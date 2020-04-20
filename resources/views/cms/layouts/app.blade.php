<!DOCTYPE html>

<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('cms/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('cms/img/favicon.ico') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="{{ asset('cms/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('cms/css/cms-dashboard.css') }} " rel="stylesheet" />
    </head>

    <body>
        <div class="wrapper">

            @include('cms.layouts.navbars.sidebar')

            <div class="main-panel">
                @include('cms.layouts.navbars.navbar')
                @yield('content')
                @include('cms.layouts.footer.nav')
            </div>

        </div>

    </body>
    <!--   Core JS Files   -->
    <script src="{{ asset('cms/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('cms/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('cms/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('cms/js/plugins/jquery.sharrre.js') }}"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('cms/js/plugins/bootstrap-switch.js') }}"></script>
    <!--  Chartist Plugin  -->
    <script src="{{ asset('cms/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('cms/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('cms/js/dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

</html>



<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com) & Updivision (https://www.updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim & Updivision

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
