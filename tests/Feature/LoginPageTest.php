<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_login_title_is_showing(): void
    {
        $response = $this->get('/login');
        $response->assertSeeText('Login',false);
        $response->assertStatus(200);
    }
}
