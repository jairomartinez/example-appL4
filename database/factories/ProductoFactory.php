<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->words(2),
            'description'=>$this->faker->words(6),
            'price'=>$this->faker->numerify('####.##'),
            'stock'=>$this->faker->numberBetween(1, 100),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
