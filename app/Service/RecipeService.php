<?php

namespace App\Service;

use App\Http\Requests\RecipeRequest;
use App\Repositories\RecipeRepository;
use App\Service\AlertService;
use Illuminate\Support\Facades\Auth;

class RecipeService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RecipeRepository();
        $this->service = new BookService();
    }

    public function search($search, $maxPages = 5)
    {
        if (isset($search) || $search == null) {
            $status = $this->repository->search($search, $maxPages);
            if ($status === false) {
                return AlertService::sendError("Erro de conexão com o servidor, tente novamente em alguns instantes", 500);
            }

            return $status;
        }
    }

    public function create(RecipeRequest $request)
    {

        $user = Auth::user();
        $categoryImages = [
            ['confeitaria.png', 'confeitaria2.png'],
            ['refeicao.png', 'refeicao2.png'],
            ['bebida.png', 'bebida2.png'],
        ];
        $recipe = $request->all();
        $recipe['category_id'] = $recipe['category'];
        $recipe['created_by'] = $user->name;
        $recipe['save'] = 1;
        $recipe['image'] = $categoryImages[$recipe['category'] - 1][rand(0, 1)];

        $status = $this->repository->create($recipe);

        if ($status === false) {
            return AlertService::sendError("Erro de conexão com o servidor, tente novamente em alguns instantes", 500);
        }

        if ($status) {
            $this->service->store($status->id, $user);
            return ['data' => ['status' => 'success', 'data' => $status], 'code' => 201];
        }

        return AlertService::sendError("Não foi possivel enviar", 500);
    }

}
