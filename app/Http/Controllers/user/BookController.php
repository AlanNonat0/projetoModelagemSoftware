<?php

namespace App\Http\Controllers\user;

use App\Service\BookService;
use App\Service\CategoryService;
use App\Http\Requests\BookRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function __construct()
    {
        $this->service = new BookService();
        $this->categoryService = new CategoryService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryService->categories();
        return view('app.users.book', ['categories' => $categories]);
    }

    public function search(BookRequest $request){
        $user = (Auth::user())->id;
        $data = $this->service->search($request, $user);

        return response()->json($data);
    }

}
