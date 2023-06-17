<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SeanceController;

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



// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [CinemaController::class, 'index']);
Route::get('/next-movie/{id}', [CinemaController::class, 'nextMovie']);

Route::get('/movie', [MoviesController::class, 'index'] )->name("movies.index");

Route::post('/movie', [MoviesController::class, 'store'] )->name('movies.store');
Route::get('/movie/create', [MoviesController::class, 'create'] )->name("movies.create");
Route::get('/movie/{movie}', [MoviesController::class, 'show'] )->name("movies.show");
Route::get('/movie/{movie}/edit', [MoviesController::class, 'edit'] )->name("movies.edit");
Route::patch('/movie/{movie}', [MoviesController::class, 'update'] )->name("movies.update");
Route::delete('/movie/{movie}', [MoviesController::class, 'destroy'] )->name("movies.destroy");

// Route::get('/seance', [SeanceController::class, 'index'])->name('seance.index');
// Route::get('/seance/{seance}', [SeanceController::class, 'show'])->name('seance.show');
