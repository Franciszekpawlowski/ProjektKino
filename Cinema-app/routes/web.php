<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemaController;


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


Route::get('/', [CinemaController::class, 'index']);
Route::get('/next-movie/{id}', [CinemaController::class, 'nextMovie']);
