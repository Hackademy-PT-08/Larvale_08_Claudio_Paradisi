<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/articoli/crea-articoli', [ArticleController::class, 'create'])->name('create-article');
Route::post('/articoli/crea-articoli', [ArticleController::class, 'store'])->name('store-article');
Route::get('/profilo', [UserController::class, 'index'])
->middleware(['auth', 'verified'])
->name('profilo');