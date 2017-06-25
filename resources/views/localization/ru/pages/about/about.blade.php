@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Обо мне
                    <small>Моя работа</small>
                </h1>

                <!-- Page Heading/Breadcrumbs -->
                @include('pages/about/parts/breadcrumbs')

            </div>
        </div>

        <!-- Intro Content -->
        @include('pages/about/parts/intro')

        <!-- Team Members -->
        @include('pages/about/parts/team')

        <!-- Our Customers -->
        @include('pages/about/parts/customers')

        <hr>

    </div>
@endsection