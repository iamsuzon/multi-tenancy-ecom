<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Multi Tenancy Ecommerce</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{global_asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{global_asset('assets/css/style.css')}}">

    @yield('styles')
    @yield('head-bottom')
</head>
<body>
    @yield('contents')
    <script src="{{global_asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    @yield('body-bottom')
</body>
</html>
