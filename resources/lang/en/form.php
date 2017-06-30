<?php

use App\Contracts\Channels\Auth\AuthenticationChannelsInterface as channels;

/*
  |--------------------------------------------------------------------------
  | Auth Form Fields Lines
  |--------------------------------------------------------------------------
  |
  | The following language lines are used in the forms.
  |
 */

return [
    'order' => [
        'name' => [
            'title' => 'Your Name:',
            'holder' => 'Please enter your name',
        ],
        'phone' => [
            'title' => 'Phone number:',
            'holder' => 'Please enter your phone number',
        ],
        'message' => [
            'title' => 'Message:',
            'holder' => 'Please enter your message',
        ],
        'submit' => 'Order Massage',
    ],
];
