<?php

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
