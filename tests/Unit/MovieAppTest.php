<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class MovieAppTest extends TestCase
{
    use RefreshDatabase;

    // ============================================
    // AUTH
    // ============================================

    // TC-001: Register with valid data
    public function test_register_with_valid_data()
    {
        $response = $this->postJson('/api/user/sign-up', [
            'name'                  => 'john',
            'email'                 => 'john@gmail.com',
            'password'              => 'password123',
            'password_confirmation' => 'password123', 
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'email' => 'john@gmail.com'
        ]);
    }

    // TC-002: Error when logging in with wrong password
    public function test_login_with_wrong_password()
    {
        User::factory()->create([
            'email'              => 'john@gmail.com',
            'password'           => Hash::make('password123'),
            'email_verified_at'  => now(), // ← bypass email verification
        ]);

        $response = $this->postJson('/api/user/sign-in', [
            'email'    => 'john@gmail.com',
            'password' => 'wrongpass',
        ]);

        $response->assertStatus(401); // ← API returns 401
    }

    // ============================================
    // SEARCH
    // ============================================

    // TC-003: Search movie with valid title
    public function test_search_movie_with_valid_title()
    {
        Movie::factory()->create(['title' => 'Avengers Endgame']);

        $response = $this->getJson('/api/user/movies?title=Avengers');

        $response->assertStatus(200);
        $response->assertJsonFragment(['title' => 'Avengers Endgame']);
    }

    // TC-004: Empty result when searching for movie that does not exist
    public function test_search_movie_that_does_not_exist()
    {
        $response = $this->getJson('/api/user/movies?title=xyznonexistent123');

        $response->assertStatus(200);
        // Empty array or empty data
        $response->assertJsonCount(0, 'data');
    }

    // ============================================
    // MOVIE DETAILS
    // ============================================

    // TC-005: View details of existing movie
    public function test_view_details_of_existing_movie()
    {
        $movie = Movie::factory()->create();

        $response = $this->getJson('/api/user/movies/' . $movie->id);

        $response->assertStatus(200);
        $response->assertJsonFragment(['title' => $movie->title]);
    }

    // TC-006: Unable to view details of non-existent movie
    public function test_view_details_of_nonexistent_movie()
    {
        $response = $this->getJson('/api/user/movies/99999');

        $response->assertStatus(404);
    }

    // ============================================
    // RATING
    // ============================================

    // TC-007: Rate a movie while logged in
    public function test_rate_movie_while_logged_in()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create([
            'email_verified_at' => now(), // ← bypass email verification
        ]);
        $movie = Movie::factory()->create();

        $response = $this->actingAs($user)->postJson('/api/user/ratings', [
            'movie_id' => $movie->id,
            'rating'   => 5,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('ratings', [
            'user_id'  => $user->id,
            'movie_id' => $movie->id,
            'rating'   => 5,
        ]);
    }

    // TC-008: Fail to rate a movie without login
    public function test_rate_movie_without_login()
    {
        $movie = Movie::factory()->create();

        $response = $this->postJson('/api/user/ratings', [
            'movie_id' => $movie->id,
            'rating'   => 5,
        ]);

        $response->assertStatus(401);
    }

    // ============================================
    // WATCHLIST
    // ============================================

    // TC-009: Add movie to watchlist while logged in
    public function test_add_movie_to_watchlist_while_logged_in()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create([
            'email_verified_at' => now(), // ← bypass email verification
        ]);
        $movie = Movie::factory()->create();

        $response = $this->actingAs($user)->postJson('/api/user/watchlist', [
            'movie_id' => $movie->id,
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('watchlists', [
            'user_id'  => $user->id,
            'movie_id' => $movie->id,
        ]);
    }

    // TC-010: Error when adding same movie to watchlist twice
    public function test_add_same_movie_to_watchlist_twice()
    {
        /** @var \App\Models\User $user */
        $user = User::factory()->create([
            'email_verified_at' => now(), // ← bypass email verification
        ]);
        $movie = Movie::factory()->create();

        // Add first time directly to DB
        Watchlist::create([
            'user_id'  => $user->id,
            'movie_id' => $movie->id,
        ]);

        // Try adding second time via API
        $response = $this->actingAs($user)->postJson('/api/user/watchlist', [
            'movie_id' => $movie->id,
        ]);

        $response->assertStatus(409);
    }
}