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
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
        'client_id' => '285795926918-qgo3inoucfbtakcq6r3b6p6rd1173j8v.apps.googleusercontent.com',
        'client_secret' => 'FPcok6Ima1WjeNxac6RsXi46',
        'redirect' => 'http://cchess.nctu.me/oauth/oauth-back/google',
    ],
	
	'facebook' => [
        'client_id' => '1946376638913233',
        'client_secret' => '6a957204c0f9e4a8eb650e2c1e68609d',
        'redirect' => 'http://cchess.nctu.me/oauth/oauth-back/facebook',
    ],
];
