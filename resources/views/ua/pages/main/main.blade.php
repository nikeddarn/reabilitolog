@extends('layouts/common')

@section('content')
    <!-- Header Carousel -->
    @include('carousels/header_carousel')

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        @include('pages/main/parts/marketing')

        <!-- Portfolio Section -->
        @include('pages/main/parts/portfolio')

        <!-- Features Section -->
        @include('pages/main/parts/features')

        <hr>

        <!-- Call to Action Section -->
        @include('pages/main/parts/action')

        <hr>

        <!-- Footer -->
        @include('footers/common')

    </div>
@endsection

@section('scripts')
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
@endsection