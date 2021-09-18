<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;

class UserInnerNavTest extends TestCase
{
    use DatabaseTransactions;

    
     /** @test */
     public function a_user_can_see_inner_navigation_at_academy_page()
     {
         $user = User::Factory()->create();
         $response = $this->get('/users/'.$user->username);
         $response->assertViewHas('Academy');
         $response->assertSeeText('Event');
         $response->assertSeeText('Challenge');
         $response->assertSeeText('Winning App');
         $response->assertStatus(200);
     }

     /** @test */
     public function a_user_can_see_inner_navigation_at_event_page()
     {
         $user = User::Factory()->create();
         $response = $this->get('/users/'.$user->username.'/event');
         $response->assertViewHas('Academy');
         $response->assertSeeText('Event');
         $response->assertSeeText('Challenge');
         $response->assertSeeText('Winning App');
         $response->assertStatus(200);
     }

     /** @test */
     public function a_user_can_see_inner_navigation_at_challenge_page()
     {
         $user = User::Factory()->create();
         $response = $this->get('/users/'.$user->username.'/challenge');
         $response->assertViewHas('Academy');
         $response->assertSeeText('Event');
         $response->assertSeeText('Challenge');
         $response->assertSeeText('Winning App');
         $response->assertStatus(200);
     }

}
