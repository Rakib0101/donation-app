<?php

// SSLCommerz configuration
$mode = config('templatecookie.ssl_mode');
$is_localhost = $mode == 'sandbox' ? true : false;
$api_domain = $mode == 'sandbox' ? 'https://sandbox.sslcommerz.com' : 'https://securepay.sslcommerz.com';

return [
    'projectPath' => env('PROJECT_PATH'),
    // For Sandbox, use "https://sandbox.sslcommerz.com"
    // For Live, use "https://securepay.sslcommerz.com"
    'apiDomain' => env('API_DOMAIN_URL', $api_domain),
    'apiCredentials' => [
        'store_id' => config('templatecookie.ssl_id'),
        'store_password' => config('templatecookie.ssl_pass'),
    ],
    'apiUrl' => [
        'make_payment' => '/gwprocess/v4/api.php',
        'transaction_status' => '/validator/api/merchantTransIDvalidationAPI.php',
        'order_validate' => '/validator/api/validationserverAPI.php',
        'refund_payment' => '/validator/api/merchantTransIDvalidationAPI.php',
        'refund_status' => '/validator/api/merchantTransIDvalidationAPI.php',
    ],
    'connect_from_localhost' => env('IS_LOCALHOST', $is_localhost), // For Sandbox, use "true", For Live, use "false"
    'success_url' => '/payment/ssl/success',
    'failed_url' => '/payment/ssl/fail',
    'cancel_url' => '/payment/ssl/cancel',
    'ipn_url' => '/payment/ssl/ipn',
];
