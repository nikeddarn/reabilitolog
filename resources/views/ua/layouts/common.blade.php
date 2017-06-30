<!DOCTYPE html>
<html lang="ua">

<head>
    <!-- Head section -->
    @include('head/head')
</head>

<body>

<!-- Navigation -->
@include('menu/jumbotron')

<!-- Page Content -->
@yield('content')

<!-- Scripts -->
@yield ('scripts')

</body>

