<?php

return [
    'api_key' => env('UDDOKTA_PAY_API_KEY'),
    'url' => env('UDDOKTA_PAY_URL', 'https://pay.marketor.xyz'),
    'disabled' => !env('UDDOKTA_PAY_API_KEY'),
];
