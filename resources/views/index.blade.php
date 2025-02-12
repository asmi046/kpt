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

    <main class="main">
        <section class="section-about">
            <div class="container">
                <h2 class="section-about__title">ООО КПТ - помогаем наладить бизнес-процессы</h2>
                <p class="section-about__text">Компания КПТ оказывает комплексные услуги для бизнеса. Мы помогаем Вашему
                    бизнесу развиваться и налаживать бизнес процессы</p>
            </div>
        </section>

        <section class="section-services">
            <div class="container">
                <div class="section-services__content">
                    <div class="section-services__content-img">
                        <img src="{{ asset('img/img-busines-office.webp') }}" alt="{{ config('lend_data.company_name') }}">
                    </div>
                    <div class="section-services__content-wrapper">
                        <div class="section-services__content-item">
                            <h3 class="section-services__content-title">КАДРОВОЕ СОПРОВОЖДЕНИЕ</h3>
                            <p class="section-services__content-text">
                                Кадровое сопровождение деятельности организации включает в себя:
                            </p>
                            <ul class="section-services__list">
                                <li class="section-services__list-item">
                                    оформление кадровых документов (прием, увольнение, командирование, отпуск, временная
                                    нетрудоспособность и т.д.);
                                </li>
                                <li class="section-services__list-item">
                                    ведение табельного учета;
                                </li>
                                <li class="section-services__list-item">
                                    ведение воинского учета организации, взаимодействие с военными комиссариатами;
                                </li>
                                <li class="section-services__list-item">
                                    подготовка и сдача кадровой отчетности (в ЦЭН, СФР, Росстат);
                                </li>
                                <li class="section-services__list-item">
                                    взаимодействие с проверяющими и контролирующими органами;
                                </li>
                                <li class="section-services__list-item">
                                    разработка, актуализация локально-нормативных актов организации;
                                </li>
                                <li class="section-services__list-item">
                                    проведение аудита кадрового делопроизводства, восстановление отсутствующих документов.
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="section-services__content-item">
                            <h3 class="section-services__content-title">В РАСЧЕТ ЗАРАБОТНОЙ ПЛАТЫ ВХОДИТ:</h3>
                            <ul class="section-services__list">
                                <li class="section-services__list-item">
                                    расчет и выплата заработной платы, иных видов начислений;
                                </li>
                                <li class="section-services__list-item">
                                    произведение удержаний из заработной платы;
                                </li>
                                <li class="section-services__list-item">
                                    расчет и уплата НДФЛ, страховых взносов;
                                </li>
                                <li class="section-services__list-item">
                                    сдача в органы статистики, налоговые органы, Социальный Фонд отчетности по итогам
                                    отчетного периода;
                                </li>
                                <li class="section-services__list-item">
                                    взаимодействие с проверяющими и контролирующими органами, подготовка ответов на
                                    требования.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-services">
            <div class="container">
                <div class="section-services__content">
                    <div class="section-services__content-item">
                        <h3 class="section-services__content-title">БУХГАЛТЕРСКОЕ СОПРОВОЖДЕНИЕ:</h3>
                        <ul class="section-services__list">
                            <li class="section-services__list-item">
                                ведение бухгалтерского, налогового учета (учета доходов и расходов)
                            </li>
                            <li class="section-services__list-item">
                                подготовка и сдача отчетности в госорганы
                            </li>
                            <li class="section-services__list-item">
                                расчет и оплата налогов
                            </li>
                            <li class="section-services__list-item">
                                подготовка документов для госорганов
                            </li>
                            <li class="section-services__list-item">
                                подготовка к проверкам госорганов
                            </li>
                            <li class="section-services__list-item">
                                поддержка при взаимодействии с госорганами
                            </li>
                            <li class="section-services__list-item">
                                консультационные услуги бухгалтера по ведению бухгалтерского, налогового учета.
                            </li>
                        </ul>
                    </div>
                    <div class="section-services__content-img">
                        <img src="{{ asset('img/img-computer-work.webp') }}" alt="{{ config('lend_data.company_name') }}">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-services">
            <div class="container">
                <div class="section-services__content">
                    <div class="section-services__content-img">
                        <img src="{{ asset('img/img-computer-work.webp') }}" alt="{{ config('lend_data.company_name') }}">
                    </div>
                    <div class="section-services__content-item">
                        <h3 class="section-services__content-title">УСЛУГИ В ОБЛАСТИ ИТ:</h3>
                        <ul class="section-services__list">
                            <li class="section-services__list-item">
                                Диагностика и устранение неполадок в работе компьютерной и оргтехники.
                            </li>
                            <li class="section-services__list-item">
                                Установка и настройка программного обеспечения.
                            </li>
                            <li class="section-services__list-item">
                                Консультации по работе с программным обеспечением.
                            </li>
                            <li class="section-services__list-item">
                                Настройка и администрирование серверов и сетевого оборудования.
                            </li>
                            <li class="section-services__list-item">
                                Мониторинг работы серверов и сети.
                            </li>
                            <li class="section-services__list-item">
                                Резервное копирование данных.
                            </li>
                            <li class="section-services__list-item">
                                Установка и настройка антивирусного ПО.
                            </li>
                            <li class="section-services__list-item">
                                Настройка IP-телефонии.
                            </li>
                            <li class="section-services__list-item">
                                Подбор компьютерного оборудования под задачи заказчика.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>



@endsection
