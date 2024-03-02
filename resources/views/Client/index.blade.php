@php
    $product1 =  App\Models\Product::where('isActive', 1)->get();
@endphp
@extends('client.layout.layout')
{{-- Заголовок для страницы --}}
@section('title') {{ __('Главная страница') }} @endsection
{{-- Контент для страницы --}}
@section('content')

        <main class="application__main main-page" id="main-page">
            <div class="main-page__btn-up btn-up__hide"></div>
            <div class="main-page__container container">
                <div class="main-page__wrapper">
                    <section id="about" class="main-page__section about-section">
                        <div class="about-section__content">
                            <img src="{{asset('assets/img/33767c99a6d790299fc3.webp')}}" alt="Мастер" class="about-section__content-image">
                            <div class="about-section__content-text">
                                <h2 class="about-section__content-title">Наша мастерская самая лучшая по городу Курску.</h2>
                                <p class="about-section__content-description"><br> Мы изготавливаем ювелирные изделия на протяжении 10 лет. Наши профессиональные дизайнеры подберут украшение каджому. <br><br> Наши плюсы: <br><br> <span>1.</span> качество проверенное временем <br><br> <span>2.</span> наличие бюджетных вариантов <br><br> <span>3.</span> быстрое выполнение работы </p>
                            </div>
                        </div>
                    </section>
                    <section id="filter" class="main-page__section filter-section">
                        <div class="filter-section__content">
                            <div class="filter-section__filter">
                                <nav class="filter-section__navbar">
                                    <ul class="filter-section__navbar-list">
                                        <li data-target="Всё" class="filter-section__navbar-category">
                                            <h2 class="filter-section__navbar-name">Всё</h2>
                                        </li>
                                        @forelse($categories as $category)
                                            <li data-target="{{$category->target}}" class="filter-section__navbar-category">
                                                <h2 class="filter-section__navbar-name">{{$category->title}}</h2>
                                            </li>
                                        @empty
                                            {{__ ('Данные не найдены')}}
                                        @endforelse
                                    </ul>
                                </nav>
                            </div>
                            <div class="filter-section__catalog">
                                <ul class="filter-section__list">
                                    @forelse($products as $product)
                                        <li data-path="{{$product->patch}}" data-target="{{$product->target}}" class="filter-section__card">
                                            <img src="{{Storage::url($product->image)}}" alt="Подвеска Premium" class="filter-section__card-img">
                                            <h2 class="filter-section__card-name">{{$product->title}}</h2>
                                        </li>
                                    @empty
                                        {{__ ('Данные не найдены')}}
                                    @endforelse

                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="main-page__section product-section">
                        @forelse($products as $product)
                            <div data-path="{{$product->target}}" class="product-section__content">
                                <div class="product-section__top">
                                    <h2 class="product-section__top-title">{{$product->title}}</h2>
                                </div>
                                <div class="product-section__center slider">
                                    <div class="slider__wrapper swiper-wrapper">
                                        <ul class="slider__items swiper-slide">
                                            <li class="slider__item">
                                                <a href="#" class="slider__link">
                                                    <img src="{{Storage::url($product->image)}}" alt="1 картинка слайдера" class="slider__img">
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="slider__pagination swiper-slide"></div>
                                </div>
                                <div class="product-section__bottom">
                                    <div class="product-section__bottom-about">
                                        <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span>{{$product->material}}</span><br>Размеры: <span>{{$product->size}}</span><br>Время изготовления: <span>{{$product->timeCreate}}</span></p>
                                        <p class="product-section__bottom-description-right">{{$product->content}}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{__ ('Данные не найдены')}}
                        @endforelse

                    </section>
                    <section class="main-page__section similar-section">
                        <!-- <div data-path="Подвеска Premium" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li data-target="Кольцо Давид" class="similar-section__card">
                                    <img src="/src/assets/img/Ring2.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>
                                </li>
                                <li data-target="Кольцо Олег" class="similar-section__card">
                                    <img src="/src/assets/img/Ring3.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>
                                </li>
                                <li data-target="Кольцо Вардан" class="similar-section__card">
                                    <img src="/src/assets/img/Ring4.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Вардан</h2>
                                </li>
                            </ul>
                        </div> -->
{{--                        <div data-path="Кольцо Давид" class="similar-section__content">--}}
{{--                            <div class="similar-section__name">--}}
{{--                                <h2 class="similar-section__title">Похожие изделия</h2>--}}
{{--                            </div>--}}
{{--                            <ul class="similar-section__list">--}}
{{--                                <li data-target="Кольцо Олег" class="similar-section__card">--}}
{{--                                    <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="Кольцо Олег" class="similar-section__card-img">--}}
{{--                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>--}}
{{--                                </li>--}}
{{--                                <li data-target="Кольцо Вардан" class="similar-section__card">--}}
{{--                                    <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="Кольцо Вардан" class="similar-section__card-img">--}}
{{--                                    <h2 class="similar-section__card-name">Кольцо Вардан</h2>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div data-path="Кольцо Олег" class="similar-section__content">--}}
{{--                            <div class="similar-section__name">--}}
{{--                                <h2 class="similar-section__title">Похожие изделия</h2>--}}
{{--                            </div>--}}
{{--                            <ul class="similar-section__list">--}}
{{--                                <li data-target="Кольцо Давид" class="similar-section__card">--}}
{{--                                    <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="Кольцо Давид" class="similar-section__card-img">--}}
{{--                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>--}}
{{--                                </li>--}}
{{--                                <li data-target="Кольцо Вардан" class="similar-section__card">--}}
{{--                                    <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="Кольцо Вардан" class="similar-section__card-img">--}}
{{--                                    <h2 class="similar-section__card-name">Кольцо Вардан</h2>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div data-path="Кольцо Вардан" class="similar-section__content">--}}
{{--                            <div class="similar-section__name">--}}
{{--                                <h2 class="similar-section__title">Похожие изделия</h2>--}}
{{--                            </div>--}}
{{--                            <ul class="similar-section__list">--}}
{{--                                <li data-target="Кольцо Давид" class="similar-section__card">--}}
{{--                                    <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="Кольцо Давид" class="similar-section__card-img">--}}
{{--                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>--}}
{{--                                </li>--}}
{{--                                <li data-target="Кольцо Олег" class="similar-section__card">--}}
{{--                                    <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="Кольцо Олег" class="similar-section__card-img">--}}
{{--                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <!-- <div data-path="Цепочка Иван" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring1.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Евгения</h2>
                                </li>
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring2.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>
                                </li>
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring3.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>
                                </li>
                                <li class="similar-section__card">
                                    <img src="/src/assets/img/Ring1.webp" alt="" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Евгения</h2>
                                </li>
                            </ul>
                        </div> -->
                    </section>
                    <section id="reviews" class="main-page__section reviews-section">
                        @forelse($products as $product)
                            <div data-path="{{$product->target}}" class="reviews-section__content">
                                <ul class="reviews-section__list">
                                    @forelse($reviews as $review)
                                        <li class="reviews-section__review review">
                                            <div class="review__name">
                                                <img src="{{Storage::url($review->image)}}" alt="Аватар пользователя" class="review__avatar">
                                                <h2 class="review__user-name">{{$review->name}}</h2>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__description">{{$review->text}}</p>
                                            </div>
                                        </li>
                                    @empty
                                        {{__ ('Данные не найдены')}}
                                    @endforelse
                                </ul>
                            </div>
                        @empty
                            {{__ ('Данные не найдены')}}
                        @endforelse

                    </section>
                    <section id="contacts" class="main-page__section contacts-section">
                        <div class="contacts-section__content">
                            <div class="contacts-section__top">
                                <div class="contacts-section__logo">
                                    <a href="#" class="contacts-section__logo-link">
                                        <img src="{{asset('/assets/img/79ecf04b67f1c2c76d60.svg')}}" alt="Логотип" class="contacts-section__logo-img">
                                    </a>
                                </div>
                                <div class="contacts-section__number">
                                    <a href="tel:+79413758131" class="contacts-section__description"> Контактный телефон: <span>+79413758131</span></a>
                                </div>
                            </div>
                            <div class="contacts-section__mailing-list">
                                <p class="contacts-section__email">Введите email: <input type="email" class="contacts-section__email-field" title="Введите email" name="email"></p>
                                <button class="contacts-section__button">
                                    <p class="contacts-section__link">Подписаться</p>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>

@endsection
