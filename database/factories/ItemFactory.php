<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->streetName(),
            "note" => fake()->text(10),
            "price" => fake()->randomFloat(2, 1, 1000),
            "unidades_medida" => fake()->randomElement(['unidad', 'kilogramo', 'gramo', 'lb']),
            "category_id" => Category::all()->random()->id,
            "client_id" => Client::all()->random()->id
        ];
    }
}
