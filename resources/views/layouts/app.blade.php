<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div class="circles-container">
            <div class="circle-1 rounded-circle shadow-lg"></div>
            <div class="circle-2 rounded-circle shadow-lg"></div>
            <div class="circle-3 rounded-circle shadow-lg"></div>
            <div class="circle-4 rounded-circle shadow-lg"></div>
            <div class="circle-5 rounded-circle shadow-lg"></div>
            <div class="circle-6 rounded-circle shadow-lg"></div>
            <div class="circle-7 rounded-circle shadow-lg"></div>
            <div class="circle-8 rounded-circle shadow-lg"></div>
            <div class="circle-9 rounded-circle shadow-lg"></div>
            <div class="circle-10 rounded-circle shadow-lg"></div>
            <div class="circle-11 rounded-circle shadow-lg"></div>
            <div class="circle-12 rounded-circle shadow-lg"></div>
        </div>
        <div class="app-container">
            @yield('app')
        </div>
    </body>
</html>
