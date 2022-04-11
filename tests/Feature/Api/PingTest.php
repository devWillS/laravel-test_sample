<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PingTest extends TestCase
{
    /**
     * @test
     */
    public function get_ping()
    {
        $response = $this->get('/api/ping');
        $response->assertStatus(200);
        $response->assertExactJson(['message' => 'pong']);
    }
}
