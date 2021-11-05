<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Service\RecipeService;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->service = new RecipeService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('site.index');
    }

    public function search(HomeRequest $request)
    {

        $data = $this->service->search($request);
        return response()->json($data);
    }

}
