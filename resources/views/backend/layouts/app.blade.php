<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('backend/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/dist/css/demo.min.css') }}" rel="stylesheet"/>
</head>
<body class="antialiased">
<div class="wrapper">
    @include('backend.layouts.partials.header')
    <div class="page-wrapper">
        @yield('content')
        @include('backend.layouts.partials.footer')
    </div>

</div>
    @include('backend.layouts.partials.modal')


<!-- Libs JS -->
<script src="{{ asset('backend/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<!-- Tabler Core -->
<script src="{{ asset('backend/dist/js/tabler.min.js') }}"></script>

@include('backend.layouts.partials.additional_scripts')

</body>
</html>
