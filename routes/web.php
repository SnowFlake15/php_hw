<?php

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get("/games", [PostController::class, 'index']);
//Route::get("/games", [PostController::class, 'create'])->name('games.create');
Route::get('/games',[\App\Http\Controllers\GameController::class, 'index']);
Route::get('/game/{id}',[\App\Http\Controllers\GameController::class, 'show']);
Route::get('/games/create',[\App\Http\Controllers\GameController::class, 'create'])->name('games.create');
Route::post('/games/save_game',[\App\Http\Controllers\GameController::class, 'save'])->name('games.save');
Route::delete('/games/{id}/delete',[\App\Http\Controllers\GameController::class, 'delete'])->name('games.delete');
Route::get('/game/{id}/edit',[\App\Http\Controllers\GameController::class, 'edit'])->name('games.edit');
Route::put('/game/{id}/update',[\App\Http\Controllers\GameController::class, 'update'])->name('games.update');
