<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/google/callback',
        'analytics_id' => config('templatecookie.google_analytics'),
        'active' => false,
    ],

    'facebook' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/facebook/callback',
        'active' => false,
    ],

    'twitter' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/twitter/callback',
        'active' => false,
    ],

    'linkedin' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/linkedin/callback',
        'active' => true,
    ],

    'github' => [
        'client_id' => '',
        'client_secret' => '',
        'redirect' => '/auth/github/callback',
        'active' => false,
    ],
];