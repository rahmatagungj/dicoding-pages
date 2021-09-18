<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;

class UserBehaviorTest extends TestCase
{
    use DatabaseTransactions;

    
    /** @test */
    public function a_user_can_go_to_homepage()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_go_to_user_list_page()
    {
        $response = $this->get('/users');
        $response->assertStatus(200);
        $response->assertJsonStructure();
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
