<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Actor;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = [
            [
                'title' => 'Avengers: Endgame',
                'description' => 'After the devastating events of Infinity War, the Avengers assemble once more to reverse Thanos\' actions and restore order to the universe.',
                'average_rating' => 8.5,
                'poster' => 'https://www.themoviedb.org/t/p/w1280/ulzhLuWrPK07P1YkdWQLZnQh1JL.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=TcMBFSGVi1c',
                'image' => 'https://www.themoviedb.org/t/p/w1280/ulzhLuWrPK07P1YkdWQLZnQh1JL.jpg',
                'release_date' => '2019-04-26',
                'genre_ids' => [1, 3],
                'actor_names' => ['Robert Downey Jr.', 'Chris Evans', 'Scarlett Johansson'],
            ],
            [
                'title' => 'Spider-Man: No Way Home',
                'description' => 'Peter Parker seeks help from Doctor Strange to make the world forget his identity, but the spell unleashes dangerous enemies from alternate realities.',
                'average_rating' => 8.1,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=JfVOs4VSpmA',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg',
                'release_date' => '2021-12-17',
                'genre_ids' => [1, 3],
                'actor_names' => ['Tom Holland', 'Zendaya'],
            ],
            [
                'title' => 'Wonder Woman',
                'description' => 'An Amazon princess leaves her island home to fight alongside humans in World War I and discovers her full powers.',
                'average_rating' => 7.4,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/7vHxWO6ahByDWzWufFL48MXaktT.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=VSB4wGIdDwo',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/7vHxWO6ahByDWzWufFL48MXaktT.jpg',
                'release_date' => '2017-06-02',
                'genre_ids' => [1, 3],
                'actor_names' => ['Gal Gadot'],
            ],
            [
                'title' => 'Inception',
                'description' => 'A skilled thief is offered a chance to erase his criminal history if he can successfully infiltrate a target\'s dreams and plant an idea.',
                'average_rating' => 8.8,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/xlaY2zyzMfkhk0HSC5VUwzoZPU1.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/xlaY2zyzMfkhk0HSC5VUwzoZPU1.jpg',
                'release_date' => '2010-07-16',
                'genre_ids' => [1, 3],
                'actor_names' => ['Leonardo DiCaprio'],
            ],
            [
                'title' => 'The Lion King',
                'description' => 'A young lion prince flees his kingdom after the death of his father, only to learn the true meaning of responsibility and bravery.',
                'average_rating' => 8.5,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/sKCr78MXSLixwmZ8DyJLrpMsd15.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=7TavVZMewpY',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/sKCr78MXSLixwmZ8DyJLrpMsd15.jpg',
                'release_date' => '1994-06-24',
                'genre_ids' => [2, 3],
                'actor_names' => ['Emma Stone'],
            ],
            [
                'title' => 'La La Land',
                'description' => 'A jazz pianist and an aspiring actress fall in love while pursuing their dreams in Los Angeles.',
                'average_rating' => 8.0,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=0pdqf4P9MB8',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/uDO8zWDhfWwoFdKS4fzkUJt0Rf0.jpg',
                'release_date' => '2016-12-09',
                'genre_ids' => [2, 3],
                'actor_names' => ['Emma Stone', 'Ryan Gosling'],
            ],
            [
                'title' => 'Guardians of the Galaxy',
                'description' => 'A group of intergalactic criminals must work together to stop a fanatical warrior from taking control of the universe.',
                'average_rating' => 8.0,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/r7vmZjiyZw9rpJMQJdXpjgiCOk9.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=d96cjJhvlMA',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/r7vmZjiyZw9rpJMQJdXpjgiCOk9.jpg',
                'release_date' => '2014-08-01',
                'genre_ids' => [1, 3],
                'actor_names' => ['Chris Pratt', 'Zachary Levi'],
            ],
            [
                'title' => 'Future Galaxy',
                'description' => 'A new crew of explorers race against time to save the galaxy from a mysterious threat in this upcoming sci-fi adventure.',
                'average_rating' => 7.1,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/nC88F3tNp1MKSFWMPGEixjqvhu9.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=8ugaeA-nMTc',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/nC88F3tNp1MKSFWMPGEixjqvhu9.jpg',
                'release_date' => now()->addMonths(3)->toDateString(),
                'genre_ids' => [1, 3],
                'actor_names' => ['Zendaya', 'Tom Holland'],
            ],
            [
                'title' => 'Adventure Island',
                'description' => 'Young adventurers uncover ancient secrets while searching for a lost treasure on a tropical island.',
                'average_rating' => 7.3,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/yhqbI7QkT1MfsBTZvCCbBLYzriN.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=F7vU9fQUMYQ',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/yhqbI7QkT1MfsBTZvCCbBLYzriN.jpg',
                'release_date' => now()->addMonths(6)->toDateString(),
                'genre_ids' => [3],
                'actor_names' => ['Chris Pratt', 'Gal Gadot'],
            ],
            [
                'title' => 'Ocean Quest',
                'description' => 'An animated team of young heroes dives into an underwater world to rescue a lost city.',
                'average_rating' => 7.7,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/azbnl41bGqTcp2ajyfm9JYekEHp.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=WDkg3h8PCVU',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/azbnl41bGqTcp2ajyfm9JYekEHp.jpg',
                'release_date' => '2025-08-15',
                'genre_ids' => [2, 3],
                'actor_names' => ['Emma Stone', 'Zendaya'],
            ],
            [
                'title' => 'Skyfall',
                'description' => 'James Bond faces a mysterious adversary who threatens MI6 and the balance of global power.',
                'average_rating' => 7.8,
                'poster' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/d0IVecFQvsGdSbnMAHqiYsNYaJT.jpg',
                'trailer' => 'https://www.youtube.com/watch?v=6kw1UVovByw',
                'image' => 'https://media.themoviedb.org/t/p/w600_and_h900_face/d0IVecFQvsGdSbnMAHqiYsNYaJT.jpg',
                'release_date' => '2012-10-26',
                'genre_ids' => [1, 3],
                'actor_names' => ['Emma Stone'],
            ],
        ];

        foreach ($movies as $movieData) {
            $movie = Movie::updateOrCreate(
                ['title' => $movieData['title']],
                [
                    'description' => $movieData['description'],
                    'average_rating' => $movieData['average_rating'],
                    'poster' => $movieData['poster'],
                    'trailer' => $movieData['trailer'],
                    'image' => $movieData['image'] ?? null,
                    'release_date' => $movieData['release_date'],
                ]
            );

            $movie->genres()->sync($movieData['genre_ids']);

            $actorIds = collect($movieData['actor_names'] ?? [])->map(function ($actorName) {
                return Actor::firstOrCreate(
                    ['name' => $actorName],
                    ['image_url' => null]
                )->id;
            })->filter()->all();

            $movie->actors()->sync($actorIds);
        }
    }
}
