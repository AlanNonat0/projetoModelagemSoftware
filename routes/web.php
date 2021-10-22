<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\user\{
    BookController,
    RecipeController,
    PersonalDataController,
    RecipePreparationController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', HomeController::class);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/cadastrar', [AuthController::class, 'index']);

Route::prefix('usuario')->group(function () {
    Route::resource('/', BookController::class);
    Route::resource('/receita', RecipeController::class);
    Route::resource('/atualizar', PersonalDataController::class);
});

Route::resource('/preparo', RecipePreparationController::class);