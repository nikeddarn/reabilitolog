@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
    @include('pages/contact/parts/breadcrumbs')

    <!-- Content Row -->
        <div class="row">

            <!-- Map Column -->
        @include('pages/contact/parts/map')

        <!-- Contact Details Column -->
            @include('pages/contact/parts/details')

        </div>

        <!-- Contact Form -->
        @include('pages/contact/parts/form')

        <hr>

        <!-- Footer -->
        @include('footers/common')

    </div>
@endsection

@section('scripts')
    <script>
        function initMap() {
            const uluru = {lat: 50.50730, lng: 30.60770};
            let map = new google.maps.Map(document.getElementById('contact-map'), {
                zoom: 13,
                center: uluru
            });
            let marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATXenqDXHU4rnQmKfQ55ocnFYR1S2F4EA&callback=initMap"></script>
@endsection