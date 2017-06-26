@extends('layouts/common_top_carousel')

@section('content')

    <!-- Marketing Icons Section -->
    @include('pages/main/parts/marketing')

    <!-- Portfolio Section -->
{{--    @include('pages/main/parts/portfolio')--}}

    <!-- Features Section -->
    @include('pages/main/parts/features')

    {{--<hr>--}}

    <!-- Call to Action Section -->
{{--    @include('pages/main/parts/action')--}}

    {{--<hr>--}}

@endsection

@section('scripts')
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>
@endsection