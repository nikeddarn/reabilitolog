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
                    <li class="active">Music</li>
                </ol>
            </div>
        </div>

        <!-- Books -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Приятная расслабляющая музыка</h2>
            </div>

            <!-- Book 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center music">
                    <div class="panel-heading">
                        <img src="/images/media/music/anugama.jpg">
                    </div>
                    <div class="panel-body">
                        <h4>Anugama</h4>
                        <h5>Сборник концертов</h5>
                        <a href="/media/music/anugama.zip" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center music">
                    <div class="panel-heading">
                        <img src="/images/media/music/enigmatic.jpg">
                    </div>
                    <div class="panel-body">
                        <h4>Enigmatic</h4>
                        <h5>Сборник концертов</h5>
                        <a href="/media/music/enigmatic.zip" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center music">
                    <div class="panel-heading">
                        <img src="/images/media/music/karunesh.jpg">
                    </div>
                    <div class="panel-body">
                        <h4>Karunesh</h4>
                        <h5>Сборник концертов</h5>
                        <a href="/media/music/karunesh.zip" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <hr>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var equalHeight = 0;
        var music = $("#music").find('.music');
        $(music).each(function () {
            if ($(this).height() > equalHeight) {
                equalHeight = $(this).height();
            }
        });
        $(music).each(function () {
            $(this).height(equalHeight);
        });
    </script>
@endsection