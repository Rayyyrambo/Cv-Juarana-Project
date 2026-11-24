<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_invalid_credentials_show_an_error_on_the_login_screen(): void
    {
        $response = $this->followingRedirects()->post('/login', [
            'name' => 'unknown-user',
            'password' => 'wrong-password',
        ]);

        $response->assertOk()
            ->assertSee('Nama pengguna atau password yang Anda masukkan salah.');
    }

    public function test_non_admin_users_see_an_error_on_the_login_screen(): void
    {
        $user = User::factory()->create([
            'name' => 'regular-user',
            'role' => 'user',
        ]);

        $response = $this->followingRedirects()->post('/login', [
            'name' => $user->name,
            'password' => 'password',
        ]);

        $response->assertOk()
            ->assertSee('Hanya admin yang dapat login ke sistem ini.');
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard', absolute: false));
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $this->assertGuest();
        $response->assertRedirect('/');
    }
}
