<?php

// You can find the keys here : https://apps.twitter.com/

return [
    'debug'               => function_exists('env') ? env('APP_DEBUG', false) : false,

    'API_URL'             => 'api.twitter.com',
    'UPLOAD_URL'          => 'upload.twitter.com',
    'API_VERSION'         => '1.1',
    'AUTHENTICATE_URL'    => 'https://api.twitter.com/oauth/authenticate',
    'AUTHORIZE_URL'       => 'https://api.twitter.com/oauth/authorize',
    'ACCESS_TOKEN_URL'    => 'https://api.twitter.com/oauth/access_token',
    'REQUEST_TOKEN_URL'   => 'https://api.twitter.com/oauth/request_token',
    'USE_SSL'             => true,

    'CONSUMER_KEY'        => 'ITDFbIz8wm81xFzbSCdGZ4q4s',
    'CONSUMER_SECRET'     => 'SWTU7HLkyFm0DJSNuuq3vtN36RY2BjMoObmnm40eyyJ98hHQty',
    'ACCESS_TOKEN'        => '1200569483481485312-omP2znfhUYtuUSpZx22wX56oxxc5LW',
    'ACCESS_TOKEN_SECRET' => '6EXi0efwr4YRbZQikzwu6QbqvJHw3NGdDzsSs2l9tEIZw',
];
