<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $genres = [
        ['id' => 1, 'name' => 'Action'],
        ['id' => 3, 'name' => 'Adventure'],
        ['id' => 2, 'name' => 'Animation'],
    ];

    foreach ($genres as $genre) {
        Genre::updateOrCreate(
            ['id' => $genre['id']],
            ['name' => $genre['name']]
        );
    }
}
}
