<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;

class UserBehaviorTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_user_cant_go_to_list_page()
    {
        $response = $this->get('/users/');
        $response->assertNotFound();
    }

    /** @test */
    public function a_user_can_go_to_homepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

     /** @test */
     public function a_user_can_go_to_own_page()
     {
         $user = User::Factory()->create();
         $response = $this->get('/users/'.$user->username);
         $response->assertSeeText($user->username);
         $response->assertStatus(200);
     }

     /** @test */
     public function a_user_can_go_to_own_event_page()
     {
         $user = User::Factory()->create();
         $response = $this->get('/users/'.$user->username.'/event');
         $response->assertSeeText($user->username);
         $response->assertStatus(200);
     }

     /** @test */
     public function a_user_can_go_to_own_challenge_page()
     {
         $user = User::Factory()->create();
         $response = $this->get('/users/'.$user->username.'/challenge');
         $response->assertSeeText($user->username);
         $response->assertStatus(200);
     }
}
