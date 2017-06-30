@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Полезные заметки
                    <small>Блог о здоровом образе жизни</small>
                </h1>

                <!-- Page Heading/Breadcrumbs -->
                @include('pages/articles/parts/breadcrumbs')

            </div>
        </div>

        <!-- Blog Post "Resources" -->
        @include('articles/intro/resources')

        <hr>

        <!-- Blog Post "Rest" -->
    @include('articles/intro/rest')

        <hr>

        <!-- Blog Post "Auto massage" -->
        @include('articles/intro/auto_massage')

        <hr>

    </div>
@endsection

@section('description')
    <meta name="description" content="{{ trans('meta.description.articles.main') }}">
@endsection

@section('title')
    <title>{{ trans('meta.title.articles.main') }}</title>
@endsection