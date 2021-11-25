<?php

namespace App\Service;

use App\Http\Requests\BookRequest;
use App\Models\User;
use App\Repositories\BookRepository;
use App\Repositories\RecipeRepository;
use App\Service\AlertService;

class BookService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RecipeRepository();
        $this->bookRepository = new BookRepository();
    }

    public function search(BookRequest $request, $userid)
    {

        $search = $request->search;
        $category = $request->category;
        return $this->repository->bookSearch($search, $category, $userid, 9);
    }

    public function remove($recipeId, $userId)
    {
       $status = $this->bookRepository->deleteRecipieBook($recipeId, $userId);
       if ($status === false) {
            return AlertService::sendError(
                "Erro de conexão com o servidor, tente novamente em alguns instantes",
                500
            );
        }

        if ($status === null) {
            return AlertService::sendError(
                "Usuário não encontrado relogue no sistema ou tente novamente em alguns instantes",
                404
            );
        }
        $this->repository->decrementSave($recipeId);
        return ['data' => ['status' => 'success', 'data' => $status, 'code' => 200], 'code' => 200];

    }

    public function store($request, $user)
    {
        $recipeId = is_int($request)? $request : $request->get("recipe_id");

        $status = $this->bookRepository->saveRecipie($recipeId, $user->id);

        if ($status === false) {
            return AlertService::sendError(
                "Erro de conexão com o servidor, tente novamente em alguns instantes",
                500
            );
        }

        if ($status === null) {
            return AlertService::sendError(
                "Usuário não encontrado relogue no sistema ou tente novamente em alguns instantes",
                404
            );
        }

        $this->repository->incrementSave($recipeId);
        return [
            'data' => [
                'status' => 'success',
                'data' => $status,
                'code' => 201
                ],
            'code' => 201
        ];
    }

    public function checkBook($recipeId, User $user)
    {
        $cont = 0;
        $recipesOnBook = $user->books->all();
        $recipe = [
            "recipe_id" => $recipeId,
        ];

        foreach ($recipesOnBook as $recipeSaved) {
            if (array_intersect_assoc($recipe, $recipeSaved->getAttributes())) {
                $cont++;
            }
        }

        if ($cont) {
            return true;
        }
        return false;

    }

}
