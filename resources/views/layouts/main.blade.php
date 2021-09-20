<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Dicoding Pages">
    <meta name="description" content="Improve quality through concepts.">
    <meta name="keywords" content="programming, education">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="2 days">
    <meta name="author" content="Rahmat Agung Julians">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/icon/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/icon/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/icon/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icon/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/icon/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/icon/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/icon/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icon/apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/icon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/icon/android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('images/icon/favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('images/icon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="mask-icon" href="{{ asset('images/icon/safari-pinned-tab.svg')}}" color="#5bbad5">

    <meta name="msapplication-TileColor" content="#2d3e50">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:url" content="https://rahmatagungjulians.works">
    <meta property="og:image"
        content="https://dicoding-web-img.sgp1.cdn.digitaloceanspaces.com/original/commons/homepage-hero.png">
    <meta property="og:site_name" content="Dicoding Pages">
    <meta property="og:ttl" content="3600">

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"
        as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/theme.css') }}" type="text/css" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('css/app.css') }}" type="text/css" as="style" onload="this.rel='stylesheet'">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel='preload' as='style'
        href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap'>
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>@yield('title','Beranda') - Dicoding Pages</title>
</head>

<body>
    @include('layouts.navigation')
    @include('partials.jumbotron')
    @yield('content')
    @include('layouts.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script type="text/javascript">
    const observer = lozad('.lozad', {
        rootMargin: '0px 0px', 
        threshold: 0.1, 
        enableAutoReload: true
    });

    observer.observe();
</script>

</html>