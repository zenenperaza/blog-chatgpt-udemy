<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id, // Asigna un usuario aleatorio
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(), // Genera el slug automáticamente
            'content' => $this->faker->paragraphs(5, true), // Genera 3 párrafos de contenido
            'summary' => $this->faker->sentence(), // Genera un resumen corto
            'status' => $this->faker->randomElement(['draft', 'published']), // Estado aleatorio
            'featured_image' => $this->faker->imageUrl(800, 600, 'nature'), // Imagen ficticia
            'published_at' => $this->faker->dateTimeThisYear(), // Fecha de publicación aleatoria
            'created_at' => now(), 
            'updated_at' => now(),
        ];
    }
}
