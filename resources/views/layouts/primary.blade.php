<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('src/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('src/img/favicon.png') }}">
    <title>
        FRODO G-MINK
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('src/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('src/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('src/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('src/css/soft-ui-dashboard.css') }}" rel="stylesheet" />
    {{-- CND JQ --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">
    {{-- SIDE BAR --}}
    @include('layouts.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->

        @yield('content')
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('src/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('src/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('src/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('src/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('src/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('src/js/soft-ui-dashboard.min.js?v=1.0.6') }}"></script>
    {{-- MIDTRANS --}}
    <script src="{{ asset('/midtrans.js') }}"></script>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-Fbd5L7MoMVioIgZy"></script>

</body>

</html>
