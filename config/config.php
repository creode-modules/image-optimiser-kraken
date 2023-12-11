<?php

return [
    'name' => 'KrakenImageOptimiser',

    'api_key' => env('KRAKEN_API_KEY', ''),

    'api_secret' => env('KRAKEN_API_SECRET', ''),

    /**
     *
     */
    'storage_path' => storage_path('app/kraken-image-optimiser'),
];
