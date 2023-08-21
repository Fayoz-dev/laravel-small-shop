<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'category_id' => rand(1,30),
            'brand_id' => rand(1,20),
            'photo' => 'undraw_rocket.svg' ,
            'price' => $this->faker->numberBetween(1000,15468),
            'status' => rand(0,1)
        ];
    }
}
