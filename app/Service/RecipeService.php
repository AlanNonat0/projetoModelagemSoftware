<?php

namespace App\Service;

use App\Http\Requests\HomeRequest;
use App\Models\Recipe;

class RecipeService
{
    public function search(HomeRequest $request, $paginate = 8)
    {
        $search = $request->get('home-search-input');

        if (isset($search) || $search == null) {
            $data = Recipe::where('name', 'ILIKE', '%' . $search . '%')
            ->orderBy('save', 'desc')
            ->limit(32)->get();
            return $data;
        }
    }

    public function recipeRender()
    {

        return Recipe::where('save', '>=', 0)->orderBy('save', 'desc')->paginate(8);
    }
}
