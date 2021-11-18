<?php

namespace App\Service;

use App\Http\Requests\RegisterRequest;
use App\Repositories\RegisterRepository;

class RegisterService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RegisterRepository();
    }

    public function registerNewUser(RegisterRequest $request)
    {
        $user = $this->repository->create($request->all());

        if($user === false){
            return AlertService::sendError("Erro de conexão com o servidor, tente novamente em alguns instantes", 500);
        }

        if($user){
           return ['data' => ['status' => 'success', 'data' => $user], 'code' => 201];
        }

        return AlertService::sendError("Não foi possivel registrar", 500);
    }
}
