<?php

return [
  'psp' => [
    'default' => [
      'base_url'                => env('LARAVEL_PIX_PSP_BASE_URL'),
      'oauth_token_url'         => env('LARAVEL_PIX_PSP_OAUTH_URL', false),
      'oauth_bearer_token'      => env('LARAVEL_PIX_OAUTH2_BEARER_TOKEN'),
      'ssl_certificate'         => env('LARAVEL_PIX_PSP_SSL_CERTIFICATE'),
      'client_secret'           => env('LARAVEL_PIX_PSP_CLIENT_SECRET'),
      'client_id'               => env('LARAVEL_PIX_PSP_CLIENT_ID'),
      'authentication_class'    => \Junges\Pix\Api\Contracts\AuthenticatesPSPs::class,
      'resolve_endpoints_using' => \Junges\Pix\Support\Endpoints::class,
    ],
  ],
];
