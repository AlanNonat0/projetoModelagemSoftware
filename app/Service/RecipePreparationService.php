<?php

namespace App\Service;

use App\Repositories\RecipePreparationRepository;

class RecipePreparationService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RecipePreparationRepository();
    }

    public function findById($id)
    {
        $data = $this->repository->findRecipe($id);

        if ($data) {
            return $data;
        }

        return null;
    }
}
