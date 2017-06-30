@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Лечебный массаж спины
                    <small>Массаж всех отделов спины</small>
                </h1>

                <!-- Page Heading/Breadcrumbs -->
                @include('pages/back/parts/breadcrumbs')

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <!-- Pricing -->
                @include('prices/pricing_back')

            </div>
            <div class="col-md-8">

                <!-- Intro Content -->
                @include('pages/back/parts/intro')

            </div>
        </div>

        <!-- Massage Back Tabs -->
        @include('pages/back/parts/tabs')

        <hr>

    </div>
@endsection