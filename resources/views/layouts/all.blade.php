<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon256.png') }}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon128.png') }}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon64.png') }}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/img/favicons/icon16.png') }}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{ asset('/img/favicons/fav.svg') }}" sizes="any">

    <script>
        window.asset = "{{ asset('') }}";
        window.storage = "{{ asset('storage') }}";
    </script>

    <meta name="_token" content="{{ csrf_token() }}">

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'public/scss/main.scss'])
</head>

<body>
    <main id="main">
        @yield('main')
    </main>


    <div id="menue_app">
        <side-menu>
            <nav class="nav">
                <ul class="nav__list">
                    <x-menu-puncts></x-menu-puncts>
                </ul>
            </nav>
            <div class="contacts">
                <a href="tel:{{ config('lend_data.company_phone') }}">{{ config('lend_data.company_phone') }}</a>
                <a href="mailto:{{ config('lend_data.company_email') }}">{{ config('lend_data.company_email') }}</a>
            </div>
        </side-menu>
    </div>
</body>

</html>
