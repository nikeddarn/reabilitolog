@extends('layouts/common')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Breadcrumbs -->
        <div class="row top-buffer">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/articles">Articles</a>
                    </li>
                    <li class="active">Resources</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Внутренние ресурсы здоровья человека</h2>
                <p class="text-indent">Ресурсы, находящиеся в распоряжении любого живого существа, всегда ограничены.
                    Для выживания в каждой конкретной ситуации важно оптимальным образом распределить эти ресурсы между
                    всеми функциями организма: поддержанием жизнедеятельности, передвижением, ростом, размножением,
                    иммунной защитой, терморегуляцией и т. д.</p>
                <p class="text-indent">Никогда и никому во всемирной истории Homo Sapiens никакие социальные
                    вознаграждения «за заслуги» не возместили человеку годы жизни, потраченные на карабканье по
                    социальной лестнице за умозрительным «почетом и уважением», и утраченное здоровье в борьбе за чужие
                    идеи и амбиции.</p>
                <p class="text-indent">Примечательно, что «общество» называют то светским, то православным, то
                    криминальным, то обществом потребления... Все идет хорошо. Только мимо...</p>
                <p class="text-indent">Жонглирование эпитетами зависит от сиюминутной выгоды, но правильно эта химера
                    называется «общество отсроченной жизни». Необходимо, а порой и жизненно важно отстранится от
                    бесполезных стереотипов, от которых невозможно дождаться ничего, кроме старости: мы хотим всем
                    завладеть, как будто у нас есть время всем обладать.</p>
                <p>«Я есмь» является и пределом простоты, но, вместе с тем, и бесконечной сложности. Увы, но большинство
                    людей всему знают цену, но ничего не умеют ценить.</p>
                <blockquote class="blockquote-reverse">
                    <p class="mb-0">&laquo;Как приятно впадать в безнадежное отчаяние. Это дает право дуться на весь
                        мир.&raquo;</p>
                    <footer><cite title="Source Title">Ж.-П. Сартр</cite></footer>
                </blockquote>
                <p>Запоздалое прозрение одна из причин пьянства и озлобленности на всех и вся. Как это всем нам знакомо
                    - злые старики, пьянство отставников, загульные «кризисы» среднего возраста. Глядя на то, как одни
                    работают и накапливают добро, другие опускают руки, и начинают копить зависть и ненависть.</p>
                <blockquote class="blockquote-reverse">
                    <p class="mb-0">&laquo;Во всех отделах искусства дрессировки людей на первом месте значится правило
                        поддерживать и изощрять чувство чести.&raquo;</p>
                    <footer><cite title="Source Title">Артур Шопенгауэр</cite></footer>
                </blockquote>
                <p>Может это немного циничное высказывание, но, согласитесь, что оно сама истина.</p>
                <p>Человек существо социальное, если он попадает во власть самого себя (аутичность), то рано или поздно
                    его ждет психбольница и диагноз «шизофрения», если он попадает во власть социума (конформизм), то
                    рано или поздно наступает прозрение, и тогда начинаются большие, порой фатальные психологические
                    проблемы. Важно найти ту грань, тот баланс, чтобы не оказаться в итоге на обочине жизни с жалкой
                    пенсией и коробочкой наград.</p>
            </div>
        </div>

        <hr>

    </div>
@endsection

@section('description')
    <meta name="description" content="{{ trans('meta.description.articles.resources') }}">
@endsection

@section('title')
    <title>{{ trans('meta.title.articles.resources') }}</title>
@endsection