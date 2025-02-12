<?php

return [
    'company_name' => "АО «КПТ»",
    'sections' => [
        'Кадровое сопровождение' => [
            'img' => 'img/section_img/kadri.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/kadri.html')),
        ],

        'Бухгалтерское сопровождение' => [
            'img' => 'img/section_img/buch.webp',
            'napr' => 0,
            'text' => file_get_contents(public_path('lend_text/buch.html')),
        ],

        'Услуги в области ИТ' => [
            'img' => 'img/section_img/it.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/it.html')),
        ],

        'Делопроизводство' => [
            'img' => 'img/section_img/delo.webp',
            'napr' => 0,
            'text' => file_get_contents(public_path('lend_text/delo.html')),
        ],

        'Услуги финансового менеджмента' => [
            'img' => 'img/section_img/fin.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/fin.html')),
        ],

        'Услуги в области организации закупок и логистики' => [
            'img' => 'img/section_img/log.webp',
            'napr' => 0,
            'text' => file_get_contents(public_path('lend_text/log.html')),
        ],

        'Юридическое сопровождение' => [
            'img' => 'img/section_img/ur.webp',
            'napr' => 1,
            'text' => file_get_contents(public_path('lend_text/ur.html')),
        ],
    ]

];
