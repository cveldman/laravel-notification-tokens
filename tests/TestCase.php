<?php

namespace Veldman\NotificationTokens\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Veldman\NotificationTokens\NotificationTokenServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->loadLaravelMigrations();
    }

    protected function getPackageProviders($app): array
    {
        return [
            NotificationTokenServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        // perform environment setup
    }
}