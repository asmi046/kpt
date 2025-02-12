@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <header class="main_header separator bg-color--light">
        <div class="container">
            <div class="left_side">
                <div class="top d-flex">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('img/logo.svg') }}" alt="{{ config('lend_data.company_name') }}">
                    </a>

                    <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__item"><a class="nav__link" href="#">О нас</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Услуги</a></li>
                            <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="hero">
                    <h1 class="hero__title">Консалтинговые услуги для бизнеса</h1>
                    <p class="hero__description">
                        Компания КПТ оказывает комплексные услуги для бизнеса. Мы помогаем Вашему бизнесу развиваться и
                        налаживать бизнес процессы
                    </p>
                    <div class="hero__buttons">
                        <a href="#" class="button button--primary">Работа</a>
                        <a href="#" class="button button-white">Контакты</a>
                    </div>
                </div>
            </div>
            <div class="right_side">
                <img class="header-banner" src="{{ asset('img/kpt-banner.webp') }}"
                    alt="{{ config('lend_data.company_name') }}">
            </div>
        </div>
    </header>


    <main class="main">
        <section class="section-about">
            <div class="container">
                <h2 class="section-about__title">ООО КПТ - помогаем наладить <br>бизнес-процессы</h2>
                <p class="section-about__text">Компания КПТ оказывает комплексные услуги для бизнеса. Мы помогаем Вашему
                    бизнесу развиваться и налаживать бизнес процессы</p>
            </div>
        </section>

        @foreach (config('lend_data.sections') as $key => $item)
            @if ($item['napr'] == 1)
                <x-section-white :item="$item" :key="$key"></x-section-white>
            @else
                <x-section-blue :item="$item" :key="$key"></x-section-blue>
            @endif
        @endforeach
    </main>

    <section class="section-contacts">
        <div class="container">
            <div class="section-contacts__wrapper">
                <div class="section-contacts__content text_styles">
                    <h2>Контакты</h2>
                    <p class="section-contacts__text">Свяжитесь с нами любым удобным для <br> Вас способом:</p>
                    <div class="section-contacts__content-items">
                        <p><strong>Телефон:</strong></p>
                        <div><a href="tel:+74712771-033">+7(4712) 771-033</a></div>
                        <p><strong>E-mail:</strong></p>
                        <div><a href="mailto:info@kpt.ru">info@kpt.ru</a></div>
                        <p><strong>Адрес:</strong></p>
                        <div>
                            <address>305527, Курская область, Курский район, д. Ворошнево, ул.<br> Сосновая, д. 1/1
                            </address>
                        </div>
                    </div>
                </div>
                <div class="section-contacts__map">ТУТ БУДЕТ КАРТА</div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/logo-kpt-footer.svg') }}" alt="{{ config('lend_data.company_name') }}">
                </a>

                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item"><a class="nav__link" href="#">О нас</a></li>
                        <li class="nav__item"><a class="nav__link" href="#">Услуги</a></li>
                        <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
@endsection
