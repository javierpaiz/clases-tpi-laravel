<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return["nombre"=>$this->faker->sentence(), 
                "precio"=>$this->faker->randomFloat(2,10,500), 
                "stock"=>$this->faker->numberBetween(1,1000)];
    }
}
