@seoTitle(__('Golden rus'))
@php
    $product1 =  App\Models\Product::where('isActive', 1)->get();
    $setting = App\Models\Setting::find(1);
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
                        @forelse($heroes as $hero)
                            <div class="about-section__content">
                                <img src="{{Storage::url($hero->image)}}" alt="Мастер" class="about-section__content-image">
                                <div class="about-section__content-text">
                                    <h2 class="about-section__content-title">{{$hero->title}}</h2>
                                    <p class="about-section__content-description"><br>{{$hero->description}}</p>
                                    <p class="about-section__content-description"><br>{{$hero->plus}}</p>
                                    <p class="about-section__content-description"><br>{{$hero->plusOne}}</p>
                                    <p class="about-section__content-description"><br>{{$hero->plusTwo}}</p>
                                    <p class="about-section__content-description"><br>{{$hero->plusTree}}</p>
                                </div>
                            </div>
                        @empty
                            {{__ ('Данные не найдены')}}
                        @endforelse
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
                                            <img src="{{Storage::url($product->image)}}" alt="изображение товара" class="filter-section__card-img">
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
                        @forelse($reviews as $review)
                            <div data-path="{{$review->patch}}" class="reviews-section__content">
                                <ul class="reviews-section__list">
                                        <li class="reviews-section__review review">
                                            <div class="review__name">
                                                <img src="{{Storage::url($review->image)}}" alt="Аватар пользователя" class="review__avatar">
                                                <h2 class="review__user-name">{{$review->name}}</h2>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__description">{{$review->text}}</p>
                                            </div>
                                        </li>
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
                                        <img src="{{Storage::url($setting->logo)}}" alt="Логотип" class="contacts-section__logo-img">
                                    </a>
                                </div>
                                <div class="contacts-section__number">
                                    <a href="tel:+79413758131" class="contacts-section__description"> Контактный телефон: <span>{{$setting->phone_number}}</span></a>
                                </div>
                            </div>
                                <form action="{{route('client.FitbackStore')}}" method="post" class="contacts-section__mailing-list">
                                    @csrf
                                    <p class="contacts-section__email">Введите email: <input name="email" required type="email" class="contacts-section__email-field" title="Введите email" name="email"></p>
                                    <button type="submit" class="contacts-section__button">
                                        <p class="contacts-section__link">Подписаться</p>
                                    </button>
                                </form>
                        </div>
                    </section>
                </div>
            </div>
        </main>

@endsection
