<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Bram',
             'email' => 'bram@chess.com',
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Quentin',
            'email' => 'quentin@chess.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Jesse',
            'email' => 'jesse@chess.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Fonts',
            'email' => 'fonts@chess.com',
        ]);
    }
}
