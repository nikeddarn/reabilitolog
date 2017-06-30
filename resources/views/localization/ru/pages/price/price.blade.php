@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Таблица цен
                    <small>Цены на различные виды массажа</small>
                </h1>

                <!-- Page Heading/Breadcrumbs -->
                @include('pages/back/parts/breadcrumbs')

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <!-- Pricing  Common -->
                @include('prices/pricing_common')
            </div>

            <div class="col-md-4">
                <!-- Pricing Back -->
                @include('prices/pricing_back')
            </div>

            <div class="col-md-4">
                <!-- Pricing Insult -->
                @include('prices/pricing_insult')
            </div>

            <div class="col-md-4">
                <!-- Pricing Neck -->
                @include('prices/pricing_neck')
            </div>

            <div class="col-md-4">
                <!-- Pricing Chest -->
                @include('prices/pricing_chest')
            </div>

            <div class="col-md-4">
                <!-- Pricing Loin -->
                @include('prices/pricing_loin')
            </div>

        </div>

        <hr>

    </div>
@endsection