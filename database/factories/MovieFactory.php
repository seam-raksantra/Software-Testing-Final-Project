<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    public function definition(): array
    {
        return [
            // REMOVE 'id' — Laravel auto-increments it
            'title'          => $this->faker->sentence(3),
            'description'    => $this->faker->paragraph(),
            'poster'         => $this->faker->imageUrl(300, 450),
            'trailer'        => $this->faker->url(),
            'release_date'   => $this->faker->date(),
            'average_rating' => $this->faker->randomFloat(1, 1, 10),
        ];
    }
}