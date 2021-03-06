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
})->name('home');
//Route::get("/games", [PostController::class, 'index']);
//Route::get("/games", [PostController::class, 'create'])->name('games.create');
Route::get('/login', [\App\http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/game_login', [\App\http\Controllers\LoginController::class, 'gameLogin'])->name('game.login');

Route::middleware('auth')->group(function () {
    Route::get('/games', [\App\Http\Controllers\GameController::class, 'index']);
    Route::get('/game/{id}', [\App\Http\Controllers\GameController::class, 'show']);
    Route::get('/games/create', [\App\Http\Controllers\GameController::class, 'create'])->name('games.create');
    Route::post('/games/save_game', [\App\Http\Controllers\GameController::class, 'save'])->name('games.save');
    Route::get('/game/{game}/edit', [\App\Http\Controllers\GameController::class, 'edit'])->name('games.edit');
    Route::delete('/games/{game}/delete', [\App\Http\Controllers\GameController::class, 'delete'])->name('games.delete');
    Route::delete('/games/delete/{game}', [\App\Http\Controllers\GameController::class, 'delete'])->name('destroy');
    Route::put('/game/{game}/update', [\App\Http\Controllers\GameController::class, 'update'])->name('games.update');
    Route::post('/games/logout', [\App\http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::post('/games/approve', [\App\http\Controllers\LoginController::class, 'approve'])->name('approve');
    Route::get('/email/create', [\App\Http\Controllers\MailController::class, 'create'])->name('mail.create');
    Route::post('/email/send', [\App\http\Controllers\MailController::class, 'send'])->name('mail.send');

});
