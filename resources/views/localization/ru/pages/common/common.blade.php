@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Общий массаж
                    <small>Массаж всего тела</small>
                </h1>

                <!-- Page Heading/Breadcrumbs -->
                @include('pages/common/parts/breadcrumbs')

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <!-- Pricing -->
                @include('prices/pricing_common')

            </div>
            <div class="col-md-8">

                <!-- Intro Content -->
                @include('pages/common/parts/intro')

            </div>
        </div>

        <hr>

    </div>
@endsection