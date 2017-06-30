<div class="row">

    <div class="col-lg-12 top-buffer">

        <hr>

        <ul id="myTab" class="nav nav-tabs nav-justified">
            <li class="active"><a href="#service-one" data-toggle="tab">Массаж шейно-воротникового отдела</a></li>
            <li class=""><a href="#service-two" data-toggle="tab">Массаж грудного отдела</a></li>
            <li class=""><a href="#service-three" data-toggle="tab">Массаж поясничного отдела</a></li>
        </ul>

        <div id="myTabContent" class="tab-content">

            @include('pages/back/parts/tab_neck')

            @include('pages/back/parts/tab_chest')

            @include('pages/back/parts/tab_loin')

        </div>

    </div>
</div>