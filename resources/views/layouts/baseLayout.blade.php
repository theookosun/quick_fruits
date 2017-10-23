<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('page-title') </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}?ver=<?php echo filemtime('css/app.css'); ?>" rel="stylesheet">

</head>
<body>

   
    @yield('page-content')
   

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('javascripts')

    <!-- Including the sweet alert template, so the alerts can be displayed on the browser -->
    @include('sweet::alert')

</body>
</html>
