<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'code' => $this->faker->randomNumber(1, 10000),
            'color' => $this->faker->colorName(),
            'price' => $this->faker->numberBetween($min = 1500, $max = 60000),
            'size' => $this->faker->numberBetween($min = 10, $max = 300),
            'description' => $this->faker->text(800),
        ];
    }
}
