<?php

namespace App\Http\Controllers;

use App\Service\RecipeService;
use App\Http\Requests\HomeRequest;

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

    public function search(HomeRequest $request){

        $data = $this->service->search($request->get('home-search-input'));
        return response()->json($data);
    }

}
