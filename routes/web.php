<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
// Route::group(['prefix' => 'usuarios'], function () {
//     Route::get('/', [UsuarioController::class, 'index']);
// });
Route::resource('usuarios', UsuarioController::class);
Route::group(['prefix' => 'produtos'], function () {
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/novo', [ProdutoController::class, 'new'])->name('produto.new');
    Route::post('/create', [ProdutoController::class, 'create'])->name('produto.create');
    Route::get('/editar/{id}', [ProdutoController::class, 'new'])->name('produto.new');
});
