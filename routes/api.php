<?php

use Illuminate\Support\Facades\Route;
use Veldman\NotificationTokens\Http\Controllers\NotificationTokenController;

Route::post('/api/notification-tokens', [NotificationTokenController::class, 'store']);