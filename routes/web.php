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
    RecipePreparationController,
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

// Area Livre
Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('sair', [AuthController::class, 'logout'])->name('autenticar.logout');
Route::resource('preparo', RecipePreparationController::class);

// Bloqueia o acesso ao cadastro caso esteja logado
Route::middleware('auth.block')->group(function () {

    // Cadastro
    Route::get('cadastrar', [RegisterController::class, 'index'])->name('cadastrar.index');
    Route::post('cadastrar', [RegisterController::class, 'store'])->name('cadastrar.store');

    // Autenticação
    Route::get('autenticar', [AuthController::class, 'index'])->name('autenticar.index');
    Route::post('autenticar', [AuthController::class, 'login'])->name('autenticar.login');
});

// Area do usuário
Route::middleware('auth')->prefix('usuario')->group(function () {

    // Caderno
    Route::get('caderno', [BookController::class, 'index'])->name('caderno.index');
    Route::get('caderno/search', [BookController::class, 'search'])->name('caderno.search');
    Route::post('caderno/save', [BookController::class, 'store'])->name('caderno.store');

    // Receitas
    Route::resource('receita', RecipeController::class);

    // Dados Pessoais
    Route::get('atualizar', [PersonalDataController::class, 'index'])->name('atualizar.index');
    Route::put('atualizar', [PersonalDataController::class, 'update'])->name('atualizar.update');
    Route::patch('atualizar', [PersonalDataController::class, 'update'])->name('atualizar.update');
});
