<?php

namespace Veldman\NotificationTokens\Tests\Feature\Http\Controllers;

use Veldman\NotificationTokens\Models\NotificationToken;
use Veldman\NotificationTokens\Tests\TestCase;

class NotificationTokenTest extends TestCase
{
    public function testStore()
    {
        $data = [
            'token' => 'token123',
        ];

        $this->postJson('/api/notification-tokens', $data)
            ->assertSuccessful();

        $this->assertDatabaseHas(NotificationToken::class, $data);
    }
}