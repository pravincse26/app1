<?php

return [
  // ...
  'domain'        => env('AUTH0_DOMAIN'),
  'client_id'     => env('AUTH0_CLIENT_ID'),
  'client_secret' => env('AUTH0_CLIENT_SECRET'),
  'redirect_uri'  => env( 'APP_URL' ).'/auth0/callback',
  'authorized_issuers' => [ 'https://'.env('AUTH0_DOMAIN').'/' ],
  // 'api_identifier' => '',
  'supported_algs' => [ 'RS256' ],
  // ...
];
