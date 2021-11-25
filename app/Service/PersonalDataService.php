<?php

namespace App\Service;

use App\Service\AlertService;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PersonalDataRepository;
use Illuminate\Support\Facades\Hash;

class PersonalDataService 
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PersonalDataRepository();
    }

    public function update($request, $authUser){

        if(!Hash::check($request->password, $authUser->password)){
            return AlertService::sendError("Senha invalida", 422);
        }

        $user = $this->repository->update($request, $authUser->id);

        if($user === false){
            return AlertService::sendError("Erro de conexão com o servidor, tente novamente em alguns instantes", 500);
        }
        if($user === null){
            return AlertService::sendError("Usuário não encontrado relogue no sistema ou tente novamente em alguns instantes", 404);
        }

        return ['data' => ['status' => 'success', 'data' => $user], 'code' => 201];
    }
}