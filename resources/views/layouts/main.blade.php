<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>@yield('title')</title>
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
        threshold: 0.7, 
        enableAutoReload: true
    });

    observer.observe();
</script>

</html>