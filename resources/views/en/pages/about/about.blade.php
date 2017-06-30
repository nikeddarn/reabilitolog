@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        @include('pages/about/parts/breadcrumbs')

        <!-- Intro Content -->
        @include('pages/about/parts/intro')

        <!-- Team Members -->
        @include('pages/about/parts/team')

        <!-- Our Customers -->
        @include('pages/about/parts/customers')

        <hr>

        <!-- Footer -->
        @include('footers/common')

    </div>
@endsection