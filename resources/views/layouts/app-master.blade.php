<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio Dental</title>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}">
    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/testimonials.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <!-- ICONSCOUT -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/a9045ee35a.js" crossorigin="anonymous"></script>

</head>
<body>
    @include('layouts.partials.header')
    
    
    @yield('content')
    

    <!-- SWIPER JS -->
    <script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- OWL CAROUSEL JS -->
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <!-- JS -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script src="{{ url('assets/js/slider.js') }}"></script>
    <script src="{{ url('assets/js/about-slider.js') }}"></script>
    <script src="{{ url('assets/js/testimonials-slider.js') }}"></script>

</body>
</html>