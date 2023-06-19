<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\SeatsReservation;
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



Route::get('/', function () {
    return view('app');
});

Route::get('/repertoire', [MoviesController::class, 'index'])->name('repertoire.index');

Route::get('/movie', [MoviesController::class, 'index'] )->name("movies.index");
Route::post('/movie', [MoviesController::class, 'store'] )->name('movies.store');
Route::get('/movie/create', [MoviesController::class, 'create'] )->name("movies.create");
Route::get('/movie/{movie}', [MoviesController::class, 'show'] )->name("movies.show");
Route::get('/movie/{movie}/edit', [MoviesController::class, 'edit'] )->name("movies.edit");
Route::patch('/movie/{movie}', [MoviesController::class, 'update'] )->name("movies.update");
Route::delete('/movie/{movie}', [MoviesController::class, 'destroy'] )->name("movies.destroy");

Route::post('/cinema', [CinemaController::class, 'store'] )->name('cinemas.store');
Route::get('/cinema/create', [CinemaController::class, 'create'] )->name("cinemas.create");
Route::get('/cinema/{cinema}', [CinemaController::class, 'show'] )->name("cinemas.show");
Route::get('/cinema/{cinema}/edit', [CinemaController::class, 'edit'] )->name("cinemas.edit");
Route::patch('/cinema/{cinema}', [CinemaController::class, 'update'] )->name("cinemas.update");
Route::delete('/cinema/{cinema}', [CinemaController::class, 'destroy'] )->name("cinemas.destroy");

Route::get('/reservation', [SeatsReservation::class, 'index'] )->name("movies.index");

// Route::get('/seance', [SeanceController::class, 'index'])->name('seance.index');
// Route::get('/seance/{seance}', [SeanceController::class, 'show'])->name('seance.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
