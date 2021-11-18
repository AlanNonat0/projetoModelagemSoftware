<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterRepository extends AbstractReposytory
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }
    
    /**
     * Crate new register in database
     *
     * @return App\Models\User
     */
    public function create($data)
    {
        if(!$this->testConnection()){
            return false;
        }
        
        $user = $this->model;
        $user->name = $data['registerName'];
        $user->telephone = $data['registerTelephone'];
        $user->email = $data['registerEmail'];
        $user->password = Hash::make($data['registerPassword']);
        $user->save();

        return $user;
       
    }

}