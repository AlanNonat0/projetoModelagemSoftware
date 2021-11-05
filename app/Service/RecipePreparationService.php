<?php

namespace App\Service;

use App\Models\Recipe;

class RecipePreparationService
{
    public function findById($id){
        $recipe = Recipe::find($id);

        $recipe->ingredients = explode('\r\n', $recipe->ingredients);
        $recipe->preparation = explode('\r\n', $recipe->preparation);

        return $recipe;
    }
}
