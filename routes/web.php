<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

// Route movie list
Route::get('/', [MovieController::class, 'index'])->name('movie');

// Route movie detail
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
