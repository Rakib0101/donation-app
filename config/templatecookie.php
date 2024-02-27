<?php

/*
 * This file is part of the Laravel Rave package.
 *
 * (c) templatecookie.com - Zakir Hossen <templatecookie@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'default_language' => env('APP_DEFAULT_LANGUAGE'),
    'timezone' => env('APP_TIMEZONE'),
    'currency' => env('APP_CURRENCY', 'USD'),
    'currency_symbol' => env('APP_CURRENCY_SYMBOL', '$'),
    'currency_symbol_position' => env('APP_CURRENCY_SYMBOL_POSITION', 'left'),

    'set_ip_based_location' => false,

    'paypal_sandbox_client_id' => 'AQf5e_YjNNqTlpbn6Xtpw_PfIeQTcTnOSZF72ZpRz8xfh1vp5aMtfRuqJq-3DkE2TFWt873wGRPYBOTb',
    'paypal_sandbox_secret' => 'EPvipNvQnf03CRjnv_gljFFSIXq8RMPBcszao0JarXIiKGa0ekPkXwGHJDV6SyJ89crJSA8EnVZKHzxU',
    'paypal_live_client_id' => '',
    'paypal_live_secret' => '',
    'paypal_mode' => 'sandbox',
    'paypal_active' => false,

    'stripe_key' => 'pk_test_51JAbnoDHsbz9CBNMjbDtUrA8pfBWkC9yvXqzFQYHeEJokRKFvpAedEruhqCxJhzqOflDi0KH1E020J5kitkMWV4q00fl2LBk6p',
    'stripe_secret' => 'sk_test_51JAbnoDHsbz9CBNM3FjZDwFH9rC3sr8q06vu9dDS0cjzY0o7a0VnC5KbcED1YUAEcryuro0xkDUKq8rKqVi1R9SX00idI7OL7i',
    'stripe_active' => false,

    'razorpay_key' => '',
    'razorpay_secret' => '',
    'razorpay_active' => false,

    'paystack_key' => 'sk_test_13cb7967851092da5996bab4cfe4f834e5795895',
    'paystack_secret' => 'pk_test_934e46b979e2f764fe7e0fd411cb07c1771ad200',
    'paystack_payment_url' => 'https://api.paystack.co',
    'paystack_merchant' => 'devboyarif@gmail.com',
    'paystack_active' => false,

    'ssl_id' => '',
    'ssl_pass' => '',
    'ssl_active' => false,
    'ssl_mode' => 'sandbox',

    'flw_public_key' => '',
    'flw_secret' => '',
    'flw_secret_hash' => '',
    'flw_active' => false,

    'im_key' => '',
    'im_secret' => '',
    'im_url' => 'https://test.instamojo.com/api/1.1/',
    'im_active' => false,

    'midtrans_merchat_id' => 'G167247402',
    'midtrans_client_key' => 'SB-Mid-client-ezmy-mRagVlyOgLy',
    'midtrans_server_key' => 'SB-Mid-server-vkrPiwxANbPTTOQ_ojLnMVc0',
    'midtrans_active' => false,
    'midtrans_live_mode' => false,

    'mollie_key' => '',
    'mollie_active' => true,

    'google_analytics' => '',
    'google_analytics_status' => false,

    'indeed_id' => '',
    'indeed_limit' => '10',

    'careerjet_id' => 'a14e63851b3f7a3f6f0ad7af18fa08f8',
    'careerjet_default_locale' => 'en_US',
    'careerjet_limit' => '10',

    'default_job_provider' => 'careerjet',

    'pusher_app_id' => env('PUSHER_APP_ID'),
    'pusher_app_key' => env('PUSHER_APP_KEY'),
    'pusher_app_secret' => env('PUSHER_APP_SECRET'),
    'pusher_host' => env('PUSHER_HOST'),
    'pusher_port' => env('PUSHER_PORT'),
    'pusher_schema' => env('PUSHER_SCHEME', 'https'),
    'pusher_app_cluster' => env('PUSHER_APP_CLUSTER'),
];
