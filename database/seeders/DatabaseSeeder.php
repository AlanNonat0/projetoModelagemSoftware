<?php

namespace Database\Seeders;

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
        $this->call([
            // \App\Models\User::factory(10)->create();
            \Database\Seeders\CategorySeeder::class,
            \Database\Seeders\UserSeeder::class,
            \Database\Seeders\RecipeSeeder::class,
            \Database\Seeders\BookSeeder::class
        ]);


    }
}
