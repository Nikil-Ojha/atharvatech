<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WhatsApp Business Number
    |--------------------------------------------------------------------------
    |
    | The number used to build wa.me deep links. It must be stored in
    | international format without "+" or spaces, e.g. 917011418852.
    |
    */

    'number' => env('WHATSAPP_NUMBER', '917011418852'),

    /*
    |--------------------------------------------------------------------------
    | Default Pre-filled Message
    |--------------------------------------------------------------------------
    |
    | The message pre-filled in the WhatsApp chat when a visitor taps one of
    | the WhatsApp buttons. It is appended with the details of the form the
    | visitor filled in, for the forms that are wired up to WhatsApp.
    |
    */

    'message' => env(
        'WHATSAPP_MESSAGE',
        "Hi Atharva Technologies, I'd like to know more about your services."
    ),

];
