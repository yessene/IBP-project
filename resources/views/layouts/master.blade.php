<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="{{ asset('asset/css/styles.css') }}" rel="stylesheet" />
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>
<body>

@include('layouts.inc.admin-navbar')

<div id="layoutSidenav">

@include('layouts.inc.admin-sidebar')

<div id="layouts.inc.admin-sidebar">
    <main>
        @yield('content')
    </main>
    @include('layouts.inc.admin-footer')
</div>
</div>

<script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('asset/js/scripts.js') }}" crossorigin="anonymous"></script>

        

</body>
</html>