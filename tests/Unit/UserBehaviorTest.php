<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\User;

class UserBehaviorTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;

    /** @test */
    public function a_user_can_update_own_data()
    {
        $user = User::Factory()->create();
        $response = $this->post(route('users.update', $user->username), [
            'name' => 'Rahmat Agung Julians',
            'username' => 'raj123',
            'bio' => $user->bio,
            'email' => 'rahmatagungj23@gmail.com',
        ]);
        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'name' => 'Rahmat Agung Julians',
            'username' => 'raj123',
            'bio' => $user->bio,
            'email' => 'rahmatagungj23@gmail.com',
        ]);
    }

    /** @test */
    public function a_user_cant_update_own_data_because_invalid_username()
    {
        $user = User::Factory()->create();
        $response = $this->post(route('users.update', $user->username), [
            'name' => 'Rahmat Agung Julians',
            'username' => '_1nval1du3ern4m3',
            'bio' => $user->bio,
            'email' => $user->email,
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'username' => $user->username,
            'bio' => $user->bio,
            'email' => $user->email,
        ]);
    }

    /** @test */
    public function a_user_cant_update_own_data_because_invalid_email()
    {
        $user = User::Factory()->create();
        $response = $this->post(route('users.update', $user->username), [
            'name' => 'Rahmat Agung Julians',
            'username' => $user->username,
            'bio' => $user->bio,
            'email' => 'rahmatagungj.gmail.com',
        ]);
        $response->assertStatus(302);
        $this->assertDatabaseHas('users', [
            'name' => $user->name,
            'username' => $user->username,
            'bio' => $user->bio,
            'email' => $user->email,
        ]);
    }
}
