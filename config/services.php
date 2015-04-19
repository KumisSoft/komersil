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
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => 'App\User',
        'key' => '',
        'secret' => '',
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID', ''),
        'client_secret' => env('FACEBOOK_SECRET_ID', ''),
        'redirect' => env('FACEBOOK_REDIRECT_URL', 'http://komersil.app/oauth/facebook'),
    ],

    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID', ''),
        'client_secret' => env('TWITTER_SECRET_ID', ''),
        'redirect' => env('TWITTER_REDIRECT_URL', 'http://komersil.app/oauth/twitter'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID', ''),
        'client_secret' => env('GOOGLE_SECRET_ID', ''),
        'redirect' => env('GOOGLE_REDIRECT_URL', 'http://komersil.app/oauth/google'),
    ],

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID', ''),
        'client_secret' => env('GITHUB_SECRET_ID', ''),
        'redirect' => env('GITHUB_REDIRECT_URL', 'http://komersil.app/oauth/github'),
    ],

];
