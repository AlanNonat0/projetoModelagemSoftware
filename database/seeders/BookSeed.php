<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ['user_id' => 1, 'recipe_id' => 1],
            ['user_id' => 1, 'recipe_id' => 2],
            ['user_id' => 1, 'recipe_id' => 3],
            ['user_id' => 1, 'recipe_id' => 4],
            ['user_id' => 1, 'recipe_id' => 5],
            ['user_id' => 1, 'recipe_id' => 6],
            ['user_id' => 1, 'recipe_id' => 7],
            ['user_id' => 1, 'recipe_id' => 8],
            ['user_id' => 1, 'recipe_id' => 9],
            ['user_id' => 1, 'recipe_id' => 10],
            ['user_id' => 1, 'recipe_id' => 11],
            ['user_id' => 2, 'recipe_id' => 1],
            ['user_id' => 2, 'recipe_id' => 2],
            ['user_id' => 2, 'recipe_id' => 3],
            ['user_id' => 2, 'recipe_id' => 4],
            ['user_id' => 2, 'recipe_id' => 5],
            ['user_id' => 2, 'recipe_id' => 6],
            ['user_id' => 2, 'recipe_id' => 7],
            ['user_id' => 2, 'recipe_id' => 8],
            ['user_id' => 2, 'recipe_id' => 9],
            ['user_id' => 2, 'recipe_id' => 10],
            ['user_id' => 2, 'recipe_id' => 11],
            ['user_id' => 3, 'recipe_id' => 1],
            ['user_id' => 3, 'recipe_id' => 2],
            ['user_id' => 3, 'recipe_id' => 3],
            ['user_id' => 3, 'recipe_id' => 4],
            ['user_id' => 3, 'recipe_id' => 5],
            ['user_id' => 3, 'recipe_id' => 6],
            ['user_id' => 3, 'recipe_id' => 7],
            ['user_id' => 3, 'recipe_id' => 8],
            ['user_id' => 3, 'recipe_id' => 9],
            ['user_id' => 3, 'recipe_id' => 10],
            ['user_id' => 3, 'recipe_id' => 11]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
