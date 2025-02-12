<section class="section-services">
    <div class="container">
        <div class="section-services__content text_styles">
            <div class="section-services__content-img">
                <img src="{{ asset('img/section_img/kadri.webp') }}" alt="{{ config('lend_data.company_name') }}">
            </div>
            <div class="section-services__content-wrapper">
                <h2>{{ $key }}</h2>
                {!! $item['text'] !!}
            </div>
        </div>
    </div>
</section>
