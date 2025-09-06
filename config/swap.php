<?php

/*
 * This file is part of Laravel Swap.
 *
 * (c) Florian Voutzinos <florian@voutzinos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Options.
    |--------------------------------------------------------------------------
    |
    | The options to pass to Swap amongst:
    |
    | * cache_ttl: The cache ttl in seconds.
    */
    'options' => [],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    |
    | This option specifies the services to use with their name as key and
    | their config as value.
    |
    | Here is the config spec for each service:
    |
    | * "central_bank_of_czech_republic", "central_bank_of_republic_turkey", "european_central_bank", "google",
    |   "national_bank_of_romania", "webservicex", "russian_central_bank", "cryptonator" can be enabled with "true" as value.
    |
    | * 'fixer' => [
    |       'access_key' => 'secret', // Your app id
    |       'enterprise' => true, // True if your AppId is an enterprise one
    |   ]
    |
    | * 'currency_layer' => [
    |       'access_key' => 'secret', // Your app id
    |       'enterprise' => true, // True if your AppId is an enterprise one
    |   ]
    |
    | * 'forge' => [
    |       'api_key' => 'secret', // The API token
    |   ]
    |
    | * 'open_exchange_rates' => [
    |       'app_id' => 'secret', // Your app id
    |       'enterprise' => true, // True if your AppId is an enterprise one
    |   ]
    |
    | * 'xignite' => [
    |       'token' => 'secret', // The API token
    |   ]
    |
    | * 'currency_data_feed' => [
    |       'api_key' => 'secret', // The API token
    |   ]
    |
    | * 'currency_converter' => [
    |       'api_key' => 'access_key', // The API token
    |       'enterprise' => true, // True if your AppId is an enterprise one
    |   ]

    |
    */
    // 'services' => [
    //     'fixer' => ['access_key' => '06f31a35ca541291d163746f97e8501f', 'enterprise' => false],
    //     'currency_layer' => ['access_key' => '728982ad332963fc851c2feece2e7567', 'enterprise' => false],
    // ],

    'services' => [
        'fixer' => ['access_key' => '2938e40512e07fd44f4d7ea8848f2c8f', 'enterprise' => true],
        'currency_layer' => ['access_key' => '0530d86d42a92dd9cf1d3485cd82e637', 'enterprise' => true],
        // 'exchange_rates_api' => ['access_key' => 'd1b2e6674432a41c6e5ae9805fd8b1d9'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache
    |--------------------------------------------------------------------------
    |
    | This option specifies the Laravel cache store to use.
    |
    | 'cache' => 'file'
    */
    'cache' => null,

    /*
    |--------------------------------------------------------------------------
    | Http Client.
    |--------------------------------------------------------------------------
    |
    | The HTTP client service name to use.
    */
    'http_client' => null,

    /*
    |--------------------------------------------------------------------------
    | Request Factory.
    |--------------------------------------------------------------------------
    |
    | The Request Factory service name to use.
    */
    'request_factory' => null,
];
