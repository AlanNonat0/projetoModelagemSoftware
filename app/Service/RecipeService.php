<?php

namespace App\Service;

use App\Repositories\RecipeRepository;

class RecipeService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RecipeRepository();
    }

    public function search($search, $maxPages = 5)
    {
        if (isset($search) || $search == null) {
            return $this->repository->search($search, $maxPages);
        }
    }

}
