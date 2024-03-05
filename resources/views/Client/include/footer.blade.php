@php
    $setting = App\Models\Setting::find(1);
    $socials =  App\Models\Social::where('isActive', 1)->get();
@endphp
<footer class="application__footer footer" id="footer-top">
    <div class="footer__container container">
        <div class="footer__inner">
            <div class="footer__logo">
                <a href="#" class="footer__logo-link">
                    <img src="{{Storage::url($setting->logo)}}" alt="Логотип" class="footer__logo-img">
                </a>
            </div>
            <nav class="footer__navbar">
                <ul class="footer__list">
                    @forelse($socials as $social)
                        <li class="footer__item">
                            <a href="{{$social->link}}" class="footer__link"><img src="{{Storage::url($social->image)}}" class=" w-full h-[auto] " alt=""></a>
                        </li>
                    @empty
                        {{__ ('Данные не найдены')}}
                    @endforelse
                </ul>
                <div class="footer__email">
                    <a href="mailto:dr.grobovick@yandex.ru" class="footer__description">{{$setting->email}}</a>
                </div>
            </nav>
        </div>
    </div>
</footer>
