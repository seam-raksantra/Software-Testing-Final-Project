<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\GenreSeeder;
use Database\Seeders\ActorSeeder;
use Database\Seeders\MovieSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'), // Hash the password!
        ]);

        $this->call(GenreSeeder::class);
        $this->call(ActorSeeder::class);
        $this->call(MovieSeeder::class);
    }
}
