@php
//    $setting = App\Models\Setting::find(1);
@endphp
<header class="application__header header" id="header-top">
    <div class="header__container container">
        <div class="header__inner">
            <div class="header__logo">
                <a href="#" class="header__logo-link">
                    <img src="{{asset('/assets/img/79ecf04b67f1c2c76d60.svg')}}" alt="" class="header__logo-img">
                </a>
            </div>
            <nav class="header__navbar navbar">
                <input class="navbar__checkbox" type="checkbox" id="nav-toggle" hidden>
                <label class="navbar__button" for="nav-toggle" onclick></label>
                <menu id="menubox" class="navbar__menu">
                    <li class="navbar__item">
                        <a href="#about" class="navbar__link">
                            <p class="navbar__description">О нас</p>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="#filter" class="navbar__link">
                            <p class="navbar__description">Каталог</p>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="#reviews" class="navbar__link">
                            <p class="navbar__description">Отзывы</p>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="#contacts" class="navbar__link">
                            <p class="navbar__description">Контакты</p>
                        </a>
                    </li>
                </menu>
            </nav>
        </div>
    </div>
</header>
