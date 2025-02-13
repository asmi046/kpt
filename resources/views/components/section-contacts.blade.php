    <section class="section-contacts" id="services-contacts">
        <div class="container">
            <div class="section-contacts__content">
                <div class="section-contacts__content-text text_styles">
                    <h2>Контакты</h2>
                    <p class="section-contacts__text">Свяжитесь с нами любым удобным для <br> Вас способом:</p>
                    <div class="section-contacts__content-items">
                        <p><strong>Телефон:</strong></p>
                        <div><a
                                href="tel:{{ config('lend_data.company_phone') }}">{{ config('lend_data.company_phone') }}</a>
                        </div>
                        <p><strong>E-mail:</strong></p>
                        <div><a
                                href="mailto:{{ config('lend_data.company_email') }}">{{ config('lend_data.company_email') }}</a>
                        </div>
                        <p><strong>Адрес:</strong></p>
                        <div>
                            <address>{{ config('lend_data.company_address') }}
                            </address>
                        </div>
                    </div>
                </div>
                <div class="section-contacts__content-map">
                    <script>
                        ymaps.ready(init);

                        function init() {
                            let coordinates = [{{ config('lend_data.company_geo') }}]
                            let pinAdress = '{{ asset('img/map_pin.svg') }}'
                            console.log(pinAdress)
                            var myMap = new ymaps.Map("map", {
                                center: coordinates,
                                zoom: 15,
                                controls: []
                            });

                            var myGeoObjects = [];

                            // Указываем координаты метки
                            myGeoObjects = new ymaps.Placemark(coordinates, {
                                hintContent: '<div class="map-hint">{{ config('lend_data.company_name') }}</div>',
                                balloonContent: '<div class="map-hint">{{ config('lend_data.company_name') }}</div>',
                            }, {
                                iconLayout: 'default#image',
                                // Путь до нашей картинки
                                iconImageHref: pinAdress,
                                // Размеры иконки
                                iconImageSize: [22, 30],
                                // Смещение верхнего угла относительно основания иконки
                                iconImageOffset: [-11, -31]
                            });

                            var clusterer = new ymaps.Clusterer({
                                clusterDisableClickZoom: false,
                                clusterOpenBalloonOnClick: false,
                            });

                            clusterer.add(myGeoObjects);
                            myMap.geoObjects.add(clusterer);
                            // Отключим zoom
                            myMap.behaviors.disable('scrollZoom');

                        }
                    </script>

                    <div id="map" class="map_contacts"></div>
                </div>
            </div>
        </div>
    </section>
