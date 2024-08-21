<?php

namespace Veldman\NotificationTokens\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NotificationTokenRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'token' => ['required', 'string']
        ];
    }
}