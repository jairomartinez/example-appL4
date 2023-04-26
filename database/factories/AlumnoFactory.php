<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'edad' => $this->faker->numberBetween(5, 20),
            'identidad' => $this->faker->unique()->numerify('####-####-#####'),
            'direccion' => $this->faker->address
        ];
    }
}
