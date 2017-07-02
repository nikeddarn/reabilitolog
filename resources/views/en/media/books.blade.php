@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div id="books" class="container">

        <!-- Breadcrumbs -->
        <div class="row top-buffer">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Books</li>
                </ol>
            </div>
        </div>

        <!-- Books -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Книги о массаже</h2>
            </div>

            <!-- Book 1 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/anatomy_for_massagist.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Григорий Белоголовский</h5>
                        <h4>Анатомия человека для массажистов</h4>
                        <a href="/media/books/anatomy_for_massagist.rar" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/gimnastika_sosudov.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Гимнастика для сосудов</h4>
                        <a href="/media/books/gym_for_VAS.djvu" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/headache.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Избавься от боли. Головная боль</h4>
                        <a href="/media/books/headache.rar" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 4 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/manual_ther.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Мануальная терапия. Руководство для врачей</h4>
                        <a href="/media/books/manual_ther.djvu" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 5 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/pain_backbone.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Избавься от боли. Боль в позвоночнике</h4>
                        <a href="/media/books/pain_backbone.djvu" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 6 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/pain_hands-legs.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Избавься от боли. Боль в руках и ногах</h4>
                        <a href="/media/books/pain_hands-legs.rar" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 7 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/posture_movement.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Лечебные позы-движения Анатолия Сителя</h4>
                        <a href="/media/books/posture_movement.djvu" class="btn btn-primary">Скачать</a>
                    </div>
                </div>
            </div>

            <!-- Book 8 -->
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center book">
                    <div class="panel-heading">
                        <img src="/images/media/books/solo_dla_pozvonochnika.jpg">
                    </div>
                    <div class="panel-body">
                        <h5>Ситель А.Б.</h5>
                        <h4>Соло для позвоночника</h4>
                        <a href="/media/books/solo_dla_pozvonochnika.rarr" class="btn btn-primary">Скачать</a>
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
        var books = $("#books").find('.book');
        $(books).each(function () {
            if ($(this).height() > equalHeight) {
                equalHeight = $(this).height();
            }
        });
        $(books).each(function () {
            $(this).height(equalHeight);
        });
    </script>
@endsection

@section('description')
    <meta name="description" content="{{ trans('meta.description.books') }}">
@endsection

@section('title')
    <title>{{ trans('meta.title.books') }}</title>
@endsection