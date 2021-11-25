<?php

namespace App\Repositories;

use App\Models\Book;
use App\Repositories\AbstractReposytory;

class BookRepository extends AbstractReposytory
{
    protected $model;

    public function __construct()
    {
        $this->model = new Book();
    }

    public function saveRecipie($recipeId, $userId)
    {
        if (!self::testConnection()) {
            return false;
        }

        $book = $this->model;
        $book->user_id = $userId;
        $book->recipe_id = $recipeId;
        if (!$book->save()) {
            return null;
        }
        return true;
    }

    public function deleteRecipieBook($recipeId, $userId)
    {
        if (!self::testConnection()) {
            return false;
        }

        $recipeBook = $this->model->where('recipe_id', $recipeId)->where('user_id', $userId);
        if (!$recipeBook->delete()) {
            return null;
        }

        return true;

    }
}
