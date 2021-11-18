<?php

namespace App\Repositories;

use App\Models\Recipe;

class RecipePreparationRepository extends RecipeRepository
{

    public function findRecipe($id){
        $recipe = $this->find($id);

        $recipe->ingredients = explode('\r\n', $recipe->ingredients);
        $recipe->preparation = explode('\r\n', $recipe->preparation);

        return $recipe;
    }
}
