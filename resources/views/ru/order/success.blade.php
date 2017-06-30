@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div id="music" class="container">

        <!-- Breadcrumbs -->
        <div class="row top-buffer">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Success</li>
                </ol>
            </div>
        </div>

        <!-- Form -->
        <div class="row">
            <div class="col-md-8">
                <h3>Массаж успешно заказан</h3>
                <p>Ваш заказ обработан.</p>
                <p>В ближайшее время мы с вами свяжемся.</p>
                <p>Спасибо что обратились к нам!</p>
            </div>

        </div>

    </div>
@endsection

@section('description')
    <meta name="description" content="{{ trans('meta.description.order.success') }}">
@endsection

@section('title')
    <title>{{ trans('meta.title.order.success') }}</title>
@endsection