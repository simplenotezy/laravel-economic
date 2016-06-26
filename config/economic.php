<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Default App Token
    |--------------------------------------------------------------------------
    |
    | The default app token received from e-conomic when making developer
    | account.
    |
    */
   
   		'appToken' => env('ECONOMIC_APP_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Client Token
    |--------------------------------------------------------------------------
    |
    | The default client token received from client to integrate with their API
    |
    */
   
   		'token' => env('ECONOMIC_TOKEN', ''),


);
