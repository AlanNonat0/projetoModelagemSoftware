<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sabores - @yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css', true) }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css', true) }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico', true) }}" type="image/x-icon">

</head>

<body class="bg bg-dark">

    @include('layouts._partials.nav')
    @yield('nav_user')
    @yield('content')




    <!-- Scripts -->
    <script src="{{ asset('js/app.js', true) }}"></script>

    @yield('script')

    @include('layouts._partials.footer')
</body>

</html>
