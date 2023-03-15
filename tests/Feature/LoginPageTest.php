<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login_title_is_live(): void
    {
        $response = $this->get('/login');
        $response->assertSeeText('login');
        $response->assertStatus(200);
    }
}
