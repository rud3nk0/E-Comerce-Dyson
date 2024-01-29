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
                            Без экстремальных температур
                        </h2>
                        <p class="sub_title" style="color: #111111">Стайлер Dyson Airwrap™ имеет цилиндрические насадки для<br>
                            создания локонов или волн, а также щетки для разглаживания <br>
                            и придания объема. Подберите насадки индивидуально <br>
                            в зависимости от своего типа волос и желаемой укладки <br>
                            или выберите один из наших комплектов.
                        </p>
                    </div>
                    <img src="{{ asset('storage/banner_1.png') }}" class="d-block" alt="..." style="margin-left: 150px">
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
    <div class="reclam_section" style="background: #111111; height: 560px; display: flex; overflow: hidden; width: 1920px; margin-left: -305px">
        <div class="title_reclam" >
            <div class="logo_reclam" style="margin:111px 240px;">
                <img src="{{ asset('storage/logo.png') }}" alt="">
                <p class="subtitle_reclam" style="color: #ffff; font-size: 20px">Технологии для ухода за волосами</p>
                <h3 style="color: #ffffff; font-size: 42px">До конца февраля<br>
                <span class="discount_reclam" style="color: #ffff; font-size: 64px">СКИДКА
                    <span class="procent_reclam" style="color: #4D57C8; font-size: 64px ">10%</span>
                </span>
                </h3>
            </div>
        </div>
        <div class="banner_reclam" style="margin-top: 170px;">
            <img src="{{ asset('storage/complect.png') }}" alt="">
        </div>
    </div>
    <div class="section_banner">
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
    <div class="information_banner" style="background: #111111; height: 794px; width: 1920px; margin-left: -305px">
        <h2 style="color: #ffffff; font-size: 46px; margin-left: 280px; padding-top: 210px ">Создание локонов и волн.<br>
            Разглаживание. Высушивание волос.<br>
            Без экстремальных температур
        </h2>
        <p style="color: #ffffff; font-size: 20px; margin: 40px 280px;">Стайлер Dyson Airwrap™ имеет цилиндрические насадки для<br>
            создания локонов или волн, а также щетки для разглаживания <br>
            и придания объема. Подберите насадки индивидуально <br>
            в зависимости от своего типа волос и желаемой укладки <br>
            или выберите один из наших комплектов.
        </p>
    </div>
    <div class="exclusive_purpose" style="display: flex">
        <div class="exclusive_title" style="padding-top: 112px">
            <p style="color: #111111; font-size: 26px">Мультистайлер <strong>Dyson Airwrap™ Complete Long</strong> </p>
            <p style="color: #111111; font-size: 20px">Технологии для ухода за волосами</p>
            <h2 style="color: #111111; font-size: 42px">Эксклюзивный цвет <br>
               <span style="color: #4D57C8; font-size: 42px">Vinca blue/</span><span style="color: #CD8885; font-size: 42px">Rosén</span>
            </h2>
            <button style="background: #4D57C8; width: 235px; height: 64px; border: none; color: #ffffff; font-size: 24px">Подробнее</button>
        </div>
        <div class="exclusive_banner" >
            <img src="{{ asset('storage/banner_5.png') }}" alt="">
        </div>
    </div>
    <div class="section_product" style="background: #ffff; width: 1920px; margin-left: -305px">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card" id="{{ $post->id }}" style="width: 32rem; margin-left: 50px">
                        <img src="{{ asset('storage/images/' . $post->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->name }}</h5>
                            {{-- <p class="card-text">{{ $post->description }}</p> --}}
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="faq" style="background: #ffffff; width: 1920px; height: 997px ; margin-left: -305px">
        <div class="content_faq" style="padding: 150px 280px ">
            <h1 style="color: #111111; font-size: 42px"> <strong>FAQ</strong>  — Часто задаваемые вопросы</h1>
            <hr style="width: 1360px;">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item" style="width: 1360px;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background: #ffff!important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Главное отличие фена Dyson в быстром и безопасном высушивании волос?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                            <code>.accordion-flush</code> class. This is the first item's accordion body.
                        </div>
                    </div>
                </div>
                <hr style="width: 1360px;">
                <div class="accordion-item" style="width: 1360px;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background: #ffff!important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            В рукоятку встроен датчик температуры, благодаря которому она не поднимается выше 100 градусов?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                            <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some
                            actual content.
                        </div>
                    </div>
                </div>
                <hr style="width: 1360px;">
                <div class="accordion-item" style="width: 1360px;">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" style="background: #ffff!important;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Главное отличие фена Dyson в быстром и безопасном высушивании волос?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                            <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms
                            of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this
                            would look in a real-world application.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
