<?php

namespace App\Repositories;

class RecipePreparationRepository extends RecipeRepository
{

    public function findRecipe($id){
        $recipe = $this->find($id);

        if(!$recipe){
            return false;
        }

        $breakLine = count(explode('\r\n', $recipe->ingredients)) > 1;

        $delimiter = '';
        $breakLine? $delimiter = '\r\n' : $delimiter = PHP_EOL;

        $recipe->ingredients = explode($delimiter, $recipe->ingredients);
        $recipe->preparation = explode($delimiter, $recipe->preparation);

        return $recipe;
    }
}
