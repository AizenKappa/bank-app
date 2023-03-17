<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_title_is_showing(): void
    {
        $response = $this->get('/register');
        $response->assertSeeText('Register');
        $response->assertStatus(200);
    }

    public function test_user_can_register():void
    {
        $response = $this->post('/register',[
            'name'=>'kappa',
            'email'=>'kappa@gmail.com',
            'password'=>'kappakappa',
            'password_confirmation'=>'kappakappa'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'kappa@gmail.com',
        ]);
        $response->assertStatus(302);
        $response->assertRedirectToRoute('login');
        
    }
}
