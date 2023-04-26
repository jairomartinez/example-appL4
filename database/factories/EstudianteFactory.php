<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero_cuenta' => $this->faker->unique()->numberBetween(10000, 99999),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'identidad' => $this->faker->unique()->numerify('####-####-#####'),
            'fecha_nacimiento' => $this->faker->date(),
            'carrera' => $this->faker->randomElement(['Ingeniería en Sistemas', 'Licenciatura en Informática', 'Ingeniería en Telecomunicaciones']),
        ];
    }
}
