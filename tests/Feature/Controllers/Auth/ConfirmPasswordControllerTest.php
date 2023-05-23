<?php

namespace Tests\Feature\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User; 

class ConfirmPasswordControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testConfirmPasswordRedirectsToHome()
    {
        $user = User::factory()->create(); 

        $response = $this->actingAs($user)->post('/password/confirm', [
            'password' => 'password',
        ]);

        $response->assertRedirect('/home');
    }
}


