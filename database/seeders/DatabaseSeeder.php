<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();

        // $user = User::factory()->create([
        //     'name' => 'Kamil',
        //     'email' => 'kamil@kamil.com'
        // ]);

        // Event::create([
        //     'title' => 'urodziny1', 
        //     'user_id' => $user->id,
        //     'tags' => 'praca, cos, alaalla',
        //     'description' => 'cokolwiek',
        //     'start_date' => '2022-11-20 14:30:00',
        // ]);

        // Event::create([
        //     'title' => 'urodziny2', 
        //     'user_id' => $user->id,
        //     'tags' => 'praca, cos',
        //     'description' => 'cokolwiek',
        //     'start_date' => '2022-11-20 14:30:00',
        // ]);

        // Event::create([
        //     'title' => 'urodziny3', 
        //     'user_id' => $user->id,
        //     'tags' => 'praca, cos',
        //     'description' => 'cokolwiek',
        //     'start_date' => '2022-11-20 14:30:00',
        // ]);

        // // \App\Models\User::factory()->create([
        // //     'name' => 'Test User',
        // //     'email' => 'test@example.com',
        // // ]);
    }
}
