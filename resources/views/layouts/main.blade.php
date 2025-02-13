<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>

    <body class="antialiased">
        <header class="sticky top-0 z-10">@include('includes.header')</header>
        <div id="app">@yield('content')</div>
        <footer>@include('includes.footer')</footer>
    </body>
</html>
