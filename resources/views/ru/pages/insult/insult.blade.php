@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Массаж после инсульта
                    <small>Массаж пораженной конечности</small>
                </h1>

                <!-- Page Heading/Breadcrumbs -->
                @include('pages/common/parts/breadcrumbs')

            </div>
        </div>

        <div class="row">
            <div class="col-md-4">

                <!-- Pricing -->
                @include('prices/pricing_insult')

            </div>
            <div class="col-md-8">

                <!-- Intro Content -->
                @include('pages/insult/parts/intro')

            </div>
        </div>

        <hr>

    </div>
@endsection

@section('description')
    <meta name="description" content="{{ trans('meta.description.insult') }}">
@endsection

@section('title')
    <title>{{ trans('meta.title.insult') }}</title>
@endsection