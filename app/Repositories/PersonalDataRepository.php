<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PersonalDataRepository extends AbstractReposytory
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function update($request, $id){
        if (!self::testConnection()) {
            return false;
        }

        $user = $this->find($id);
        $user->password = Hash::make($request->npassword);
        if(!empty($request->get('telephone'))){
            $user->telephone = $request->telephone;
        }
        if(!$user->save()){
            return null;
        }

        return $user;
    }
}