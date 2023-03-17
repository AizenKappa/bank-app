<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationPageTest extends TestCase
{
    // use RefreshDatabase;

    public function test_register_title_is_showing(): void
    {
        $response = $this->get('/register');
        $response->assertSeeText('Register',false);
        $response->assertStatus(200);
    }

    public function test_user_can_register():void
    {
        $user = User::factory()->create([
            'email'=>'anas@gmail.com',
            'password'=>'anas'
        ]);
    }
}
