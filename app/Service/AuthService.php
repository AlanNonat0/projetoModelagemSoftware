<?php

namespace App\Service;

use Illuminate\Http\Request;
use App\Service\AlertService;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function authenticate(AuthRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return AlertService::sendError('logado com sucesso', 200);
        }

        return AlertService::sendError('E-mail e/ou Senha invalidos', 403);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
