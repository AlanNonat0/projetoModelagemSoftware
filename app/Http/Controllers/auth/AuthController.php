<?php

namespace App\Http\Controllers\auth;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\AuthService;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->service = new AuthService();
    }

    public function index()
    {
        return view('site.auth');
    }

    public function login(AuthRequest $request)
    {
        $response = $this->service->authenticate($request);
        return response()->json($response['data'], $response['code']);
    }

    public function logout(Request $request)
    {
        $this->service->logout($request);
        return redirect()->route('site.index');
    }
}
