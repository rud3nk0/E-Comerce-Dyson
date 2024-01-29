@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner" style="display: flex">
                    <div class="title_block">
                        <h2 class="title" style="color: #111111; margin-top: 210px;">Создание локонов и волн.<br>
                            Разглаживание. Высушивание волос.<br>
                            Без экстремальных температур</h2>
                        <p class="sub_title" style="color: #111111">Стайлер Dyson Airwrap™ имеет цилиндрические насадки для<br>
                            создания локонов или волн, а также щетки для разглаживания <br>
                            и придания объема. Подберите насадки индивидуально <br>
                            в зависимости от своего типа волос и желаемой укладки <br>
                            или выберите один из наших комплектов.</p>
                    </div>
                    <img src="{{ asset('storage/banner_1.png') }}" class="d-block" alt="..." style="margin-left: 150px">
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner" style="display: flex">
                    <div class="title_block">
                        <h2 class="title" style="color: #111111; margin-top: 210px;">Уникальные технологии<br>
                            для ухода за волосами
                        </h2>
                        <p class="sub_title" style="color: #111111">Идеальная укладка для всех типов волос <br>
                            вместе с Dyson
                        </p>
                    </div>
                    <img src="{{ asset('storage/banner_2.png') }}" class="d-block" alt="..." style="margin-left: 450px">
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner" style="display: flex">
                    <img src="{{ asset('storage/banner_3.png') }}" class="d-block" alt="...">
                    <div class="title_block">
                        <h2 class="title" style="color: #111111; margin-top: 210px;">Как сделать локоны с помощью<br>
                            эффекта Коанда
                        </h2>
                        <p class="sub_title" style="color: #111111">Используя сочетание содержащейся в волосах влаги с мощным<br>
                            воздушным потоком и контролируемым нагревом, стайлер Dyson <br>
                            Airwrap™ позволяет сушить и укладывать волосы одновременно. <br>
                            Без экстремальных температур. <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



        @foreach($posts as $post)
            <div class="card" id="{{ $post->id }}" style="width: 28rem;">
                <img src="{{ asset('storage/images/' . $post->image) }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                     <p class="card-text">{{ $post->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach


</div>
@endsection
