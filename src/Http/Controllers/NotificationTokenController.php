<?php

namespace Veldman\NotificationTokens\Http\Controllers;

use Veldman\NotificationTokens\Http\Requests\NotificationTokenRequest;
use Veldman\NotificationTokens\Models\NotificationToken;

class NotificationTokenController
{
    public function store(NotificationTokenRequest $request)
    {
        $attributes = [
            'token' => $request->get('token'),
        ];

        NotificationToken::create($attributes);
    }
}