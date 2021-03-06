<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Head section -->
    @include('head/head')
</head>

<body>

<!-- Navigation -->
@include('menu/jumbotron')

<!-- Header Carousel -->
@include('carousels/header_carousel')

<!-- Page Content -->
<div class="container">

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    @include('footers/common')

</div>

<!-- Scripts -->
@yield ('scripts')

</body>