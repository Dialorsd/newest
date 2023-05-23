<?php

namespace Tests\Feature\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Pizza;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Factory;


class PizzaControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    // public function testIndex()
    // {
    //     $response = $this->get('/pizzas');

    //     $response->assertStatus(200)
    //         ->assertViewIs('pizzas.index')
    //         ->assertViewHas('pizzas');
    // }

    // public function testShow()
    // {
    //     $pizza = Pizza::factory()->create();

    //     $response = $this->get('/pizzas/'.$pizza->id);

    //     $response->assertStatus(200)
    //         ->assertViewIs('pizzas.show')
    //         ->assertViewHas('pizza', $pizza);
    // }

    public function testCreate()
    {
        $response = $this->get('/pizzas/create');

        $response->assertStatus(200)
            ->assertViewIs('pizzas.create');
    }

    public function testStore()
    {
        $data = [
            'name' => 'Test Pizza',
            'type' => 'Vegetarian',
            'base' => 'Thin Crust',
            'toppings' => 'Mushrooms, Onions, Bell Peppers',
        ];

        $response = $this->post('/pizzas', $data);

        $response->assertStatus(302)
            ->assertRedirect('/');

        $this->assertDatabaseHas('pizzas', $data);
    }

//     public function testDestroy()
// {
//     $this->actingAs(factory(User::class)->create());

//     $pizza = factory(Pizza::class)->create();

//     $response = $this->delete('/pizzas/'.$pizza->id);

//     $response->assertStatus(302)
//              ->assertRedirect('/pizzas');

//     $this->assertDatabaseMissing('pizzas', [
//         'id' => $pizza->id,
//     ]);
}
    


