<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\{
    AuthController,
    RegisterController
};
use App\Http\Controllers\user\{
    BookController,
    RecipeController,
    PersonalDataController
};
use App\Http\Controllers\{
    HomeController,
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

Route::resource('', HomeController::class);
Route::resource('autenticar', AuthController::class);
Route::resource('cadastrar', RegisterController::class);
// Route::get('/cadastrar', [AuthController::class, 'index'])->name('auth.register');
// Route::get('/registrar', [AuthController::class, 'store'])->name('auth.register');
Route::get('logout', [AuthController::class, 'logout'])->name('autenticar.logout');


Route::prefix('usuario')->group(function () {
    Route::resource('caderno', BookController::class);
    Route::resource('receita', RecipeController::class);
    Route::resource('atualizar', PersonalDataController::class);
});

Route::resource('preparo', RecipePreparationController::class);
