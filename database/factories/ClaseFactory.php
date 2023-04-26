<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'codigo'=>$this->faker->unique()->bothify('??-###'),
            'nombre'=>$this->faker->words(2,true),
            'nota' => $this->faker->numberBetween(0, 100),
            'alumno_id' => $this->faker->numberBetween(1, 500)

        ];
    }
}
