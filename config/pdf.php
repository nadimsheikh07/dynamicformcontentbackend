<?php

return [
    'mode'             => 'utf-8',
    'format'           => 'A4', // See https://mpdf.github.io/paging/page-size-orientation.html
    'author'           => 'John Doe',
    'subject'          => 'This Document will explain the whole universe.',
    'keywords'         => 'PDF, Laravel, Package, Peace', // Separate values with comma
    'creator'          => 'Laravel Pdf',
    'display_mode'     => 'fullpage',
    'orientation'          => 'P',
    'margin_left'           => 10,
    'margin_right'          => 10,
    'margin_top'            => 10,
    'margin_bottom'         => 10,
    'margin_header'         => 0,
    'margin_footer'         => 0,
    'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        'examplefont' => [
            'R' => 'KrutiDev010.ttf',
            // 'R' => 'Hind-Regular.ttf',
            // 'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            // 'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ],        
    ],
];
