<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
    </head>
    <body>
        <img src="{{ asset('favicon.png') }}" alt="Logo">
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </body>
</html>