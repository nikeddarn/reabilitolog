@extends('layouts/common')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Контакты
                <small>Схема проезда</small>
            </h1>

            <!-- Page Heading/Breadcrumbs -->
            @include('pages/contact/parts/breadcrumbs')

        </div>
    </div>

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

@endsection

@section('scripts')
    <script>
        function initMap() {
            const coordinates = {lat: 50.50730, lng: 30.60770};
            let map = new google.maps.Map(document.getElementById('contact-map'), {
                zoom: 13,
                center: coordinates
            });
            let marker = new google.maps.Marker({
                position: coordinates,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATXenqDXHU4rnQmKfQ55ocnFYR1S2F4EA&callback=initMap"></script>
@endsection