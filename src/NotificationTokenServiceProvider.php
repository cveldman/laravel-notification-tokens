<?php

namespace Veldman\NotificationTokens;

use Illuminate\Support\ServiceProvider;

class NotificationTokenServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
}