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
                        <img width="65" height="100" src="{{ asset('img/logo.svg') }}"
                            alt="{{ config('lend_data.company_name') }}">
                    </a>

                    <nav class="nav">
                        <ul class="nav__list">
                            <x-menu-puncts></x-menu-puncts>
                        </ul>
                    </nav>
                </div>
                <div class="hero">
                    <h1 class="hero__title ">Консалтинговые услуги <br>для бизнеса</h1>
                    <p class="hero__description">
                        Компания КПТ оказывает комплексные услуги для бизнеса. Мы помогаем Вашему бизнесу развиваться и
                        налаживать бизнес процессы
                    </p>
                    <div class="hero__buttons">
                        <a href="#services-about" class="button button--primary yakor">Услуги</a>
                        <a href="#services-contacts" class="button button-white yakor">Контакты</a>
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
        <section class="section-about" id="services-about">
            <div class="container">
                <h2 class="section-about__title">АО "КПТ" - помогаем наладить <br>бизнес-процессы</h2>
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

    <x-section-contacts></x-section-contacts>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('img/logo-kpt-footer.svg') }}" alt="{{ config('lend_data.company_name') }}">
                </a>

                <nav class="nav">
                    <ul class="nav__list">
                        <x-menu-puncts></x-menu-puncts>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>

@endsection
