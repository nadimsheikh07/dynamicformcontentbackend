<?php

return [
    // 'mode'             => 'utf-8',
    'format'           => 'A4', // See https://mpdf.github.io/paging/page-size-orientation.html
    'author'           => 'John Doe',
    'subject'          => 'This Document will explain the whole universe.',
    'keywords'         => 'PDF, Laravel, Package, Peace', // Separate values with comma
    'creator'          => 'Laravel Pdf',
    'display_mode'     => 'fullpage',
    'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        'Noto Sans' => [
            'R' => 'NotoSans-Regular.ttf',
            'B' => 'NotoSans-Bold.ttf',
            'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
            'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
        ],
        'useOTL' => 0xFF,    // required for complicated langs like Persian, Arabic and Chinese
        'useKashida' => 75,  // required for complicated langs like Persian, Arabic and Chinese
    ],
];
