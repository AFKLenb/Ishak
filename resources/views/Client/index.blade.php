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
                                        <li data-target="Кольца" class="filter-section__navbar-category">
                                            <h2 class="filter-section__navbar-name">Кольца</h2>
                                        </li>
                                        <li data-target="Подвески" class="filter-section__navbar-category">
                                            <h2 class="filter-section__navbar-name">Подвески</h2>
                                        </li>
                                        <li data-target="Цепочки" class="filter-section__navbar-category">
                                            <h2 class="filter-section__navbar-name">Цепочки</h2>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="filter-section__catalog">
                                <ul class="filter-section__list">
                                    <li data-path="Подвески" data-target="Подвеска Premium" class="filter-section__card">
                                        <img src="{{asset('/assets/img/b4a612afd6e19c365841.webp')}}" alt="Подвеска Premium" class="filter-section__card-img">
                                        <h2 class="filter-section__card-name">Подвеска "Premium"</h2>
                                    </li>
                                    <li data-path="Кольца" data-target="Кольцо Давид" class="filter-section__card">
                                        <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="Кольцо Давид" class="filter-section__card-img">
                                        <h2 class="filter-section__card-name">Кольцо Давид</h2>
                                    </li>
                                    <li data-path="Кольца" data-target="Кольцо Олег" class="filter-section__card">
                                        <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="Кольцо Олег" class="filter-section__card-img">
                                        <h2 class="filter-section__card-name">Кольцо Олег</h2>
                                    </li>
                                    <li data-path="Кольца" data-target="Кольцо Вардан" class="filter-section__card">
                                        <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="Кольцо Вардан" class="filter-section__card-img">
                                        <h2 class="filter-section__card-name">Кольцо Вардан</h2>
                                    </li>
                                    <li data-path="Цепочки" data-target="Цепочка Иван" class="filter-section__card">
                                        <img src="{{asset('/assets/img/25ac52ef2f24f866609f.webp')}}" alt="Цепочка Иван" class="filter-section__card-img">
                                        <h2 class="filter-section__card-name">Цепочка Иван</h2>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="main-page__section product-section">
                        <div data-path="Подвеска Premium" class="product-section__content">
                            <div class="product-section__top">
                                <h2 class="product-section__top-title">Подвеска "Premium"</h2>
                            </div>
                            <div class="product-section__center slider">
                                <div class="slider__wrapper swiper-wrapper">
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/b4a612afd6e19c365841.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/b4a612afd6e19c365841.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/b4a612afd6e19c365841.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider__pagination swiper-slide"></div>
                            </div>
                            <div class="product-section__bottom">
                                <div class="product-section__bottom-about">
                                    <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span>золото с брелиантами</span><br>Размеры: <span>40см</span><br>Время изготовления: <span>3-4 дня</span></p>
                                    <p class="product-section__bottom-description-right">Подвеска из золота с бриллиантами будет уместна на торжественном мероприятии, в театре и на свидании.</p>
                                </div>
                            </div>
                        </div>
                        <div data-path="Кольцо Давид" class="product-section__content">
                            <div class="product-section__top">
                                <h2 class="product-section__top-title">Кольцо Давид</h2>
                            </div>
                            <div class="product-section__center slider">
                                <div class="slider__wrapper swiper-wrapper">
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider__pagination swiper-slide"></div>
                            </div>
                            <div class="product-section__bottom">
                                <div class="product-section__bottom-about">
                                    <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span>серебро с сапфиром</span><br>Размеры: <span>30см</span><br>Время изготовления: <span>2-3 дня</span></p>
                                    <p class="product-section__bottom-description-right">Стильное дизайнерское кольцо необычной формы из золота с бриллиантами отлично дополнит ваш праздничный образ.</p>
                                </div>
                            </div>
                        </div>
                        <div data-path="Кольцо Олег" class="product-section__content">
                            <div class="product-section__top">
                                <h2 class="product-section__top-title">Кольцо Олег</h2>
                            </div>
                            <div class="product-section__center slider">
                                <div class="slider__wrapper swiper-wrapper">
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider__pagination swiper-slide"></div>
                            </div>
                            <div class="product-section__bottom">
                                <div class="product-section__bottom-about">
                                    <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span>серебро с рубинами</span><br>Размеры: <span>40см</span><br>Время изготовления: <span>3-4 дня</span></p>
                                    <p class="product-section__bottom-description-right">Кольцо отличается особой выразительностью, безупречным стилем и изяществом исполнения.</p>
                                </div>
                            </div>
                        </div>
                        <div data-path="Кольцо Вардан" class="product-section__content">
                            <div class="product-section__top">
                                <h2 class="product-section__top-title">Кольцо Вардан</h2>
                            </div>
                            <div class="product-section__center slider">
                                <div class="slider__wrapper swiper-wrapper">
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider__pagination swiper-slide"></div>
                            </div>
                            <div class="product-section__bottom">
                                <div class="product-section__bottom-about">
                                    <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span>серебро с изумрудом</span><br>Размеры: <span>40см</span><br>Время изготовления: <span>2-3 дня</span></p>
                                    <p class="product-section__bottom-description-right">Стильное украшение современного дизайна восхитит тех, кто вам дорог и подарит искромётные эмоции.</p>
                                </div>
                            </div>
                        </div>
                        <div data-path="Цепочка Иван" class="product-section__content">
                            <div class="product-section__top">
                                <h2 class="product-section__top-title">Цепочка Иван</h2>
                            </div>
                            <div class="product-section__center slider">
                                <div class="slider__wrapper swiper-wrapper">
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/25ac52ef2f24f866609f.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/672c66028c16ba8c48aa.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="slider__items swiper-slide">
                                        <li class="slider__item">
                                            <a href="#" class="slider__link">
                                                <img src="{{asset('/assets/img/b32a8516ece59c42fd47.webp')}}" alt="1 картинка слайдера" class="slider__img">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="slider__pagination swiper-slide"></div>
                            </div>
                            <div class="product-section__bottom">
                                <div class="product-section__bottom-about">
                                    <p class="product-section__bottom-description-left"><span>Описание</span><br>Материал: <span>золото</span><br>Размеры: <span>40-70 см</span><br>Время изготовления: <span>1-2 дня</span></p>
                                    <p class="product-section__bottom-description-right">Цепочка превосходно выглядит в классических повседневных и праздничных образах, прекрасно сочетается с другими украшениями нашей мастерской, подходящими по стилю.</p>
                                </div>
                            </div>
                        </div>
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
                        <div data-path="Кольцо Давид" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li data-target="Кольцо Олег" class="similar-section__card">
                                    <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="Кольцо Олег" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>
                                </li>
                                <li data-target="Кольцо Вардан" class="similar-section__card">
                                    <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="Кольцо Вардан" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Вардан</h2>
                                </li>
                            </ul>
                        </div>
                        <div data-path="Кольцо Олег" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li data-target="Кольцо Давид" class="similar-section__card">
                                    <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="Кольцо Давид" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>
                                </li>
                                <li data-target="Кольцо Вардан" class="similar-section__card">
                                    <img src="{{asset('/assets/img/26614c40d5e99c0d495e.webp')}}" alt="Кольцо Вардан" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Вардан</h2>
                                </li>
                            </ul>
                        </div>
                        <div data-path="Кольцо Вардан" class="similar-section__content">
                            <div class="similar-section__name">
                                <h2 class="similar-section__title">Похожие изделия</h2>
                            </div>
                            <ul class="similar-section__list">
                                <li data-target="Кольцо Давид" class="similar-section__card">
                                    <img src="{{asset('/assets/img/244ea0cc11b3eedcd080.webp')}}" alt="Кольцо Давид" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Давид</h2>
                                </li>
                                <li data-target="Кольцо Олег" class="similar-section__card">
                                    <img src="{{asset('/assets/img/ea4a789765fe8ca7c79c.webp')}}" alt="Кольцо Олег" class="similar-section__card-img">
                                    <h2 class="similar-section__card-name">Кольцо Олег</h2>
                                </li>
                            </ul>
                        </div>
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
                        <div data-path="Подвеска Premium" class="reviews-section__content">
                            <ul class="reviews-section__list">
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Посетитель</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Очень классная подвеска пришла без дефектов всё отлично 👍</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Вардан</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">💣💥💥💥💥👍👍👍👍👍</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Эвелина</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Топи топи❤️💗💗💗💗</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-path="Кольцо Давид" class="reviews-section__content">
                            <ul class="reviews-section__list">
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Юлия</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Дочери понравилось</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Денчик</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Всё хорошо, кольцо супруге очень понравилось)</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Владимир</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Настоящее золото, жена довольна, но вроде как говорит, типа болтается, может из-за холода</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-path="Кольцо Олег" class="reviews-section__content">
                            <ul class="reviews-section__list">
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Арина</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Отличное колечко, люблю такого формата. Проба стоит, на солнце и под лампой блестит как положено. Камушки все на месте. В общем очень довольна, спасибо.</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Вера</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Очень красивое колечко, сверкает, блестит, Все камни на месте, проба стоит. Размер в размер) ношу уже неделю, не могу налюбоваться )</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Олег</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">В честь меня назвали кольцо??!</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-path="Кольцо Вардан" class="reviews-section__content">
                            <ul class="reviews-section__list">
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Давид</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Как говорится, и в пир, и в мир. Красивое нереально. Изумруды блестят, ношу 2 месяца. При нанесении крема на руки обязательно снимаю, хочу как можно больше носить такую красоту. Не понимаю людей, которые купят недорогое золотое колечко и ждут, что годами оно будет как новое. Покупайте серебро и не жалуетесь. А если бережно относиться, серебро служит долго. Спасибо мастеру.</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Наталия</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Чудное. У меня было в золоте, купила в серебре! Смотреться оригинально!</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Игорь</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Очень красивое женское кольцо!!! Моей Барышне очень-очень понравилось!!! Спасибо огромнейшее...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div data-path="Цепочка Иван" class="reviews-section__content">
                            <ul class="reviews-section__list">
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Александр</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Цепь огонь🔥🔥🔥согласно описанию, советую.</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Мария</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Парень был в восторге, но потерял цепочку через неделю )</p>
                                    </div>
                                </li>
                                <li class="reviews-section__review review">
                                    <div class="review__name">
                                        <img src="{{asset('/assets/img/ba4917558587ff7fda10.webp')}}" alt="Аватар пользователя" class="review__avatar">
                                        <h2 class="review__user-name">Регина</h2>
                                    </div>
                                    <div class="review__content">
                                        <p class="review__description">Отличная цепочка, сын даже купался в ней, ничего не облезло, внешний вид шикарный,блестит, спасибо продавцу,советую!!!!</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
