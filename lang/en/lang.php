<?php declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'EasyBill.de Integration for OFFLINE.Mall',
        'description' => 'Integrate your OFFLINE.Mall OctoberCMS WebShop with your easybill.de invoicing software.'
    ],
    'admin' => [
        'menu_label' => 'easybill.de Settings',
        'menu_description' => 'Configure your easybill.de account and integration with OFFLINE.Mall.',

        'api_key_label' => 'API Key',
        'api_key_comment' => 'The API Key of your easybill.de account.',
        'request_limit_label' => 'Limit API Requests / Minute',
        'request_limit_comment' => 'Customise the number of API requests per minute (suitable for your booked package).',
    ]
];
