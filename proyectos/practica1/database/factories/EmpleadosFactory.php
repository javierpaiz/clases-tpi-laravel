<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleados>
 */
class EmpleadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //

            "nombreEmpleado"=>$this->faker->name(),
            "correoEmpleado"=>$this->faker->email(),
            "departamento_id"=>$this->faker->numberBetween(1, 5)
        ];
    }
}
