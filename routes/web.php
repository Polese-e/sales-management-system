<?php

use App\Http\Controllers\LojaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('lojas', LojaController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('vendas', VendaController::class);

Route::get('/', function () {
    return view('welcome');
});
