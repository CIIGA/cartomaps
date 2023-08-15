<?php

use App\Http\Controllers\FichaController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
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

Route::get('/index/{id_documento}', [IndexController::class, 'index'])->name('index');
Route::post('/imagenes', [ImageController::class, 'index'])->name('formImg');


Route::get('/buscar', [IndexController::class, 'buscar'])->name('buscar');
//formulario
Route::post('/formulario', [FichaController::class, 'index'])->name('form');
