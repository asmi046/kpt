<?php

return [
    'company_name' => "АО «КПТ»",
    'company_phone' => "+7(4712) 771-033",
    'company_email'=> "info@aokpt.ru",
    'company_address'=> "305527, Курская область, Курский район, д. Ворошнево, ул.Сосновая, д. 1/1",
    'company_geo'=> '51.651562, 36.045294',
    'sections' => [

         'Бухгалтерское сопровождение' => [
             'img' => 'img/section_img/buch.webp',
             'napr' => 1,
             'text' => file_get_contents(public_path('lend_text/buch.html')),
         ],

        'Кадровое сопровождение' => [
            'img' => 'img/section_img/kadri.webp',
            'napr' => 0,
            'text' => file_get_contents(public_path('lend_text/kadri.html')),
        ],

        'Юридическое сопровождение' => [
            'img' => 'img/section_img/ur.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/ur.html')),
        ],

        'Услуги финансового менеджмента' => [
            'img' => 'img/section_img/fin.webp',
            'napr' => 0,
            'text' => file_get_contents(public_path('lend_text/fin.html')),
        ],

        'Услуги в области ИТ' => [
            'img' => 'img/section_img/it.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/it.html')),
        ],

        'Услуги в области организации закупок и логистики' => [
            'img' => 'img/section_img/log.webp',
            'napr' => 0,
            'text' => file_get_contents(public_path('lend_text/log.html')),
        ],

        'Делопроизводство' => [
            'img' => 'img/section_img/delo.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/delo.html')),
        ],
    ]

];
