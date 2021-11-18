<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\RecipePreparationService;
use App\Http\Requests\RecipePreparationRequest;

class RecipePreparationController extends Controller
{
    private $service;

    public function __construct(){
        $this->service = new RecipePreparationService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('site.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = $this->service->findById($id);
        return view('site.preparation', ['recipe' => $recipe]);
    }

}
