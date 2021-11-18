<?php

namespace App\Repositories;

use App\Models\Recipe;

class RecipeRepository extends AbstractReposytory
{
    protected $model;

    public function __construct()
    {
        $this->model = new Recipe();
    }

    public function search($search, $maxPages){

        $limit = $maxPages != null? $maxPages * 8 : 40;
        return Recipe::where('name', 'ILIKE', '%' . $search . '%')
        ->orderBy('save', 'desc')
        ->limit($limit)
        ->get();

    }

}
