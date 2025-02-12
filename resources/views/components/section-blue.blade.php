<section class="section-services bg-color--light border-radius-base separator">
    <div class="container">
        <div class="section-services__content text_styles">
            <div class="section-services__content-img">
                <img src="{{ asset('img/section_img/buch.webp') }}" alt="{{ config('lend_data.company_name') }}">
            </div>
            <div class="section-services__content-item">
                <h2>{{ $key }}</h2>
                {!! $item['text'] !!}
            </div>
        </div>
    </div>
</section>
