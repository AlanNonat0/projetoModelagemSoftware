<?php

namespace App\Repositories;

use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeRepository extends AbstractReposytory
{
    protected $model;

    public function __construct()
    {
        $this->model = new Recipe();
    }

    public function search($search, $maxPages){

        $limit = $maxPages != null? $maxPages * 8 : 40;
        return $this->model->where('name', 'ILIKE', '%' . $search . '%')
        ->orderBy('save', 'desc')
        ->limit($limit)
        ->get();

    }

    public function bookSearch($search, $category, $userid, $maxPages){
        $limit = $maxPages != null? $maxPages * 8 : 40;

        $data = DB::table('recipes')
            ->where('name', 'ILIKE', '%' . $search . '%')
            ->join('books', 'recipes.id', 'books.recipe_id')
            ->where('books.user_id', $userid)
            ->limit($limit);
        if(!empty($category)){
            $data->where('category_id', $category);

        }

        return $data->get()->all();
    }

}
