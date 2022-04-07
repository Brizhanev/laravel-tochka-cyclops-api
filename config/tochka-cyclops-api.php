<?php

return [
    'layer' => env('TOCHKA_CYCLOPS_LAYER', 'stage'),
    'layers' => [
        'stage' => [
            'api_url' => env('TOCHKA_CYCLOPS_STAGE_API_URL', 'https://stage.tochka.com/api/v1/cyclops'),
            'tender_helpers_stage_api_url' => env('TOCHKA_CYCLOPS_TENDER_HELPERS_STAGE_API_URL', 'https://stage.tochka.com/api/v1/tender-helpers/'),
            'public_key' => env('TOCHKA_CYCLOPS_STAGE_PUBLIC_KEY', 'public_key.pem'),
            'sign_system' => env('TOCHKA_CYCLOPS_STAGE_SIGN_SYSTEM', 'sign_system'),
            'sign_thumbprint' => env('TOCHKA_CYCLOPS_STAGE_SIGN_THUMBPRINT', 'sign_thumbprint'),
            'sign_pin' => env('TOCHKA_CYCLOPS_STAGE_SIGN_PIN', 'sign_pin'),
            'bank_account' => env('TOCHKA_CYCLOPS_STAGE_BANK_ACCOUNT', 'bank_account'),
            'bank_code' => env('TOCHKA_CYCLOPS_STAGE_BANK_CODE', 'bank_code'),
        ],
        'pre' => [
            'api_url' => env('TOCHKA_CYCLOPS_PRE_API_URL', 'https://pre.tochka.com/api/v1/cyclops'),
            'tender_helpers_stage_api_url' => env('TOCHKA_CYCLOPS_TENDER_HELPERS_PRE_API_URL', 'https://pre.tochka.com/api/v1/tender-helpers/'),
            'public_key' => env('TOCHKA_CYCLOPS_PRE_PUBLIC_KEY', 'public_key.pem'),
            'sign_system' => env('TOCHKA_CYCLOPS_PRE_SIGN_SYSTEM', 'sign_system'),
            'sign_thumbprint' => env('TOCHKA_CYCLOPS_PRE_SIGN_THUMBPRINT', 'sign_thumbprint'),
            'sign_pin' => env('TOCHKA_CYCLOPS_PRE_SIGN_PIN', 'sign_pin'),
            'bank_account' => env('TOCHKA_CYCLOPS_PRE_BANK_ACCOUNT', 'bank_account'),
            'bank_code' => env('TOCHKA_CYCLOPS_PRE_BANK_CODE', 'bank_code'),
        ],
        'prod' => [
            'api_url' => env('TOCHKA_CYCLOPS_PROD_API_URL', 'https://api.tochka.com/api/v1/cyclops'),
            'public_key' => env('TOCHKA_CYCLOPS_PROD_PUBLIC_KEY', '/home/webadmin/tochka/stage_public_key.pem'),
            'sign_system' => env('TOCHKA_CYCLOPS_PROD_SIGN_SYSTEM', 'sign_system'),
            'sign_thumbprint' => env('TOCHKA_CYCLOPS_PROD_SIGN_THUMBPRINT', 'sign_thumbprint'),
            'sign_pin' => env('TOCHKA_CYCLOPS_PROD_SIGN_PIN', 'sign_pin'),
            'bank_account' => env('TOCHKA_CYCLOPS_PROD_BANK_ACCOUNT', 'bank_account'),
            'bank_code' => env('TOCHKA_CYCLOPS_PROD_BANK_CODE', 'bank_code'),
        ]
    ]
];