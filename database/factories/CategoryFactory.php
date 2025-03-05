<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Primera letra en mayúscula
            'slug' => $this->faker->slug(), // Genera el slug a partir del nombre
            'description' => $this->faker->sentence(), // Genera una descripción corta
            'created_at' => now(), // Fecha y hora actual
            'updated_at' => now(), // Fecha y hora actual
        ];
    }
}
