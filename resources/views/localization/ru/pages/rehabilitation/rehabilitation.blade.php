@extends('layouts/common')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Физическая реабилитация
                <small>Кому необходим массаж</small>
            </h1>

            <!-- Page Heading/Breadcrumbs -->
            @include('pages/rehabilitation/parts/breadcrumbs')

        </div>
    </div>

    <!-- Schema sick -->
    @include('pages/rehabilitation/parts/schema')

    <!-- Rehabilitation Tabs -->
    @include('pages/rehabilitation/parts/tabs')


@endsection