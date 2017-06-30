<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <div class="navbar-header-row"><i><b>Здоровье Успех Долголетие</b></i></div>
                <div class="navbar-header-row">
                    <i class="fa fa-phone"></i>&emsp;
                    <span class="small">(097) 255-63-35</span>&emsp;
                    <span class="small">(093) 312-53-36</span>
                </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            {{--Language picker--}}
            @include('menu/language_picker')

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/rehabilitation">Реабилитация</a>
                </li>
                <li>
                    <a href="/massage/common" class="dropdown-toggle" data-toggle="dropdown">Массаж<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/massage/common">Общий массаж</a>
                        </li>
                        <li>
                            <a href="/massage/back">Лечебный массаж спины</a>
                        </li>
                        <li>
                            <a href="/massage/insult">массаж после инсульта</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/price">Цены</a>
                </li>
                <li class="dropdown">
                    <a href="/media" class="dropdown-toggle" data-toggle="dropdown">Медиа<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/articles">Статьи</a>
                        </li>
                        <li>
                            <a href="/books">Книги</a>
                        </li>
                        <li>
                            <a href="/music">Музыка</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/contact">Контакты</a>
                </li>
                <li>
                    <a href="/about">О нас</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>