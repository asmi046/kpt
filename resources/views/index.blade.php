@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <header class="main_header bg-color--light">
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
    <div class="separator" aria-hidden="true"></div>




@endsection
