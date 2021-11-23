<?php

namespace App\Service;

use App\Repositories\CategoryRepository;

class categoryService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new CategoryRepository();
    }

    public function categories(){
        return $this->repository->categories();
    }

}
