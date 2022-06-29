<?php

use App\Http\Controllers\CompraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedagemController;

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

//Route::get('/home', function () {return view('welcome');});

// Tela inicial
    Route::get('/home', [HospedagemController::class, 'index'])->name('index');

// Tela de informações
    Route::get('home/info/{id}', [HospedagemController::class, 'show'])->name('show');

// Tela de compra
    Route::get('home/compra/{id}', [HospedagemController::class, 'compra'])->name('compra');

//Cadastrar compra
    Route::post('home/compra', [CompraController::class, 'store'])->name('compra.store');
//Visualizar detalhes da compra
    Route::get('/home/compraShow', [CompraController::class, 'compraShow'])->name('compraShow');
//Cancelar compra
    Route::delete('/home/compra/{id}', [CompraController::class, 'destroy'])->name('destroy');
// Pesquisa de hospedagem
    Route::any('/home/search', [HospedagemController::class, 'search'])->name('search');
