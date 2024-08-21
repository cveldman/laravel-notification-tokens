<?php

namespace Veldman\NotificationTokens\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationToken extends Model
{
    protected $fillable = [
        'token',
    ];
}