<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;



Route::get('/',[PrincipalController::class, 'principal'])->name('site.index');

Route::get ('/sobre-nos', [SobreNosController::class, 'sobre'])->name('site.sobre');

Route::get ('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get ('/login', [LoginController::class, 'login'])->name('site.login');

//rotas para usuarios autenticados
Route::prefix('/app')->group(function(){
    Route::get ('/clientes', [ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get ('/fornecedores', [FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get ('/produtos', [ProdutosController::class, 'produtos'])->name('app.produtos');
});

