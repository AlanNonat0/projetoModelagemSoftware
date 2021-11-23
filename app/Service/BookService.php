<?php

namespace App\Service;

use App\Http\Requests\BookRequest;
use App\Repositories\RecipeRepository;

class BookService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RecipeRepository();
    }

    public function search(BookRequest $request, $userid){

        $search = $request->search;
        $category = $request->category;
        return $this->repository->bookSearch($search, $category, $userid, 9);
    }


}
