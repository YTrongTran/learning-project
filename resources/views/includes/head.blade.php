<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net" />
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="icon" href="{{ asset('/assets/img/logoheader.png') }}">
<link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" />
<link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" rel="stylesheet" />



<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/handle.js"></script>
@vite('resources/css/app.css')
