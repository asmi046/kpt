<section class="section-services">
    <div class="container">
        <div class="section-services__content text_styles">
            <div class="section-services__content-img">
                <img src="{!! $item['img'] !!}" alt="{{ $key }}">
            </div>
            <div class="section-services__content-wrapper">
                <h2>{{ $key }}</h2>
                {!! $item['text'] !!}
            </div>
        </div>
    </div>
</section>
