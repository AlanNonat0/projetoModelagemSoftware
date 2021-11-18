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
            \Database\Seeders\CategorySeed::class,
            \Database\Seeders\UserSeed::class,
            \Database\Seeders\RecipeSeed::class,
            \Database\Seeders\BookSeed::class
        ]);
    }
}
