<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase, InteractsWithDatabase;

    /**
     * Test home index.
     *
     * @return void
     */
    public function testHomeIndex()
    {
        
        $user = User::factory()->create();

        
        $response = $this->actingAs($user)->get('/home');

       
        $response->assertStatus(200);

    
        $response->assertViewIs('home');
    }
}
