<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function categories(){
        return $this->model->where('category', '!=', '')->get();
    }

}