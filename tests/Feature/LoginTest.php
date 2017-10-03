<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use JWTAuth;

class LoginTest extends TestCase
{
    use DatabaseTransactions;

    /** @var \App\Models\User */
    protected $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    protected function createAuthenticatedUser()
    {
        $this->token = JWTAuth::fromUser($this->user);
        JWTAuth::setToken($this->token);
        Auth::attempt(['email' => $this->user->email, 'password' => $this->user->password]);
    }

    protected function callAuthenticated($method, $uri, array $data = [], array $headers = [])
    {
        if ($this->token && !isset($headers['Authorization'])) {
            $headers['Authorization'] = "Bearer: $this->token";
        }
        $server = $this->transformHeadersToServerVars($headers);
        $this->call(strtoupper($method), $uri, $data, [], [], $server);

        return $this;
    }

    /** @test */
    public function can_authenticate()
    {
        $this->postJson('/api/login', [
            'email' => $this->user->email,
            'password' => 'secret',
        ])
        ->assertSuccessful()
        ->assertJsonStructure(['token']);
    }

    /** @test */
    public function can_fetch_the_current_user()
    {
        $this->createAuthenticatedUser();
        $response = $this->callAuthenticated('GET', '/api/user');
        $this->assertNotNull($response->user);
    }

    /** @test */
    public function user_can_not_login_without_email_verification()
    {
        $userNotVerified = factory(User::class)->create(['verified_at' => null]);

        $this->postJson('/api/login', [
            'email' => $userNotVerified->email,
            'password' => 'secret',
        ])->assertStatus(422);
    }
}