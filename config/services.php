<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY', 'pk_test_EiVqBgJNGGkL76aP70wlCwJW'),
        'secret' => env('STRIPE_SECRET', 'sk_test_8dgpVpWYycrDGcG0n8mONILj'),
    ],

    'facebook' => [
        'client_id'     => env('FB_ID', '884323841650474'),
        'client_secret' => env('FB_SECRET', '29afac002c87704fec3af29a6fb2b5af'),
        'redirect'      => env('FB_REDIRECT', 'http://nome.dev/social/handle/facebook')
    ],

    'twitter' => [
        'client_id'     => env('TW_ID'),
        'client_secret' => env('TW_SECRET'),
        'redirect'      => env('TW_REDIRECT')
    ],

];
