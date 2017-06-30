<div class="row">

    <div class="col-lg-12 top-buffer">

        <hr>

        <ul id="myTab" class="nav nav-tabs nav-justified">
            <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-medkit"></i> Физическая реабилитация</a></li>
            <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-heartbeat"></i> Массаж</a></li>
            <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-user-md"></i> Мои рекомендации</a></li>
        </ul>

        <div id="myTabContent" class="tab-content">

            @include('pages/rehabilitation/parts/rehabilitation_tab')

            @include('pages/rehabilitation/parts/massage_tab')

            @include('pages/rehabilitation/parts/recommendations_tab')

        </div>

    </div>
</div>