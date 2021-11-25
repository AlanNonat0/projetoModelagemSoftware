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
        if (!self::testConnection()) {
            return false;
        }
        $limit = $maxPages != null? $maxPages * 8 : 40;
        return $this->model->where('name', 'ILIKE', '%' . $search . '%')
        ->orderBy('save', 'desc')
        ->limit($limit)
        ->get();

    }

    public function bookSearch($search, $category, $userid, $maxPages){
        if (!self::testConnection()) {
            return false;
        }
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

    public function incrementSave($id){
        if (!self::testConnection()) {
            return false;
        }
        $recipe = $this->model->find($id);
        $recipe->save = $recipe->save + 1;
        if($recipe->save()){
            return true;
        }

    }

    public function decrementSave($id){
        if (!self::testConnection()) {
            return false;
        }
        $recipe = $this->model->find($id);
        $recipe->save = $recipe->save > 0? $recipe->save - 1 : 0;
        if($recipe->save()){
            return true;
        }
    }

}
