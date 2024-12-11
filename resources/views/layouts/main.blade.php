<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>

    <body class="antialiased">
        <header>@include('includes.header')</header>
        <div id="app" class="min-h-screen">@yield('content')</div>
        <footer>@include('includes.footer')</footer>
    </body>
</html>
