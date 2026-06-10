<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actors = [
            ['name' => 'Robert Downey Jr.', 'image_url' => 'https://placehold.co/400x400/png?text=Robert+Downey+Jr.'],
            ['name' => 'Chris Evans', 'image_url' => 'https://placehold.co/400x400/png?text=Chris+Evans'],
            ['name' => 'Scarlett Johansson', 'image_url' => 'https://placehold.co/400x400/png?text=Scarlett+Johansson'],
            ['name' => 'Leonardo DiCaprio', 'image_url' => 'https://placehold.co/400x400/png?text=Leonardo+DiCaprio'],
            ['name' => 'Emma Stone', 'image_url' => 'https://placehold.co/400x400/png?text=Emma+Stone'],
            ['name' => 'Tom Holland', 'image_url' => 'https://placehold.co/400x400/png?text=Tom+Holland'],
            ['name' => 'Gal Gadot', 'image_url' => 'https://placehold.co/400x400/png?text=Gal+Gadot'],
            ['name' => 'Chris Pratt', 'image_url' => 'https://placehold.co/400x400/png?text=Chris+Pratt'],
            ['name' => 'Zendaya', 'image_url' => 'https://placehold.co/400x400/png?text=Zendaya'],
            ['name' => 'Ryan Gosling', 'image_url' => 'https://placehold.co/400x400/png?text=Ryan+Gosling'],
            ['name' => 'Zachary Levi', 'image_url' => 'https://placehold.co/400x400/png?text=Zachary+Levi'],
        ];

        foreach ($actors as $actor) {
            Actor::updateOrCreate(
                ['name' => $actor['name']],
                ['image_url' => $actor['image_url']]
            );
        }
    }
}
