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
//route homepage
Route::get('/', [PublicController::class, 'index'])->name('home');
//route article
Route::get('/articoli/aggiungi', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::post('/articoli/aggiungi', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::get('/articoli/dettaglio/{id}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/articoli/modifica/{id}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');

Route::put('/articoli/modifica/{id}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');

Route::delete('/articoli/elimina/{id}', [ArticleController::class, 'destroy'])->name('article.delete')->middleware('auth');

//route user
Route::get('/profilo', [UserController::class, 'index'])
->middleware(['auth', 'verified'])
->name('profilo');