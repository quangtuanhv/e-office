<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Styles for login --}}
    <link rel="stylesheet" type="text/css" href="frontEnd/css/login.css">
    {{-- Styles mdb --}}
    <link rel="stylesheet" type="text/css" href="frontEnd/css/mdb.min.css">
    {{-- style for menu --}}
    <link rel="stylesheet" type="text/css" href="frontEnd/css/menu.css">
    {{-- link font awnsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
@guest
<body class="app-login">
    <div id="app">

        @yield('content');
        @include('page.footer');
    </div>
@else
<body>
    <div id="app">
        @include('page.menu');
        @yield('content');
        @include('page.footer');
    </div>
@endguest
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="frontEnd/js/mdb.min.js"></script>
</body>
</html>
