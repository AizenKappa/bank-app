<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginPageTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->createUser();
    }
    public function test_login_title_is_showing(): void
    {
        $response = $this->get('/login');
        $response->assertSeeText('Login',false);
        $response->assertStatus(200);
    }
    public function test_user_can_login(): void
    {
  
        $response = $this->post('/login',[
            'email'=>$this->user->email,
            'password'=>'password'
        ]);

        $response->assertStatus(302);
        $response->assertRedirectToRoute('home');
    }

    public function test_user_cant_login_with_empty_or_wrong_password(): void
    {
      
        $response = $this->post('/login',[
            'email'=>$this->user->email,
            'password'=>null
        ]);

        $response->assertSessionHas("errors");

        $response = $this->post('/login',[
            'email'=>$this->user->email,
            'password'=>'wrongpassword'
        ]);

        $response->assertSessionHas("errors");

    }

    public function createUser():User
    {
        return User::factory()->create();
    }
}
