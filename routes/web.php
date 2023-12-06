<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */

 Route::get('/', function () {
    return view('home');
});


Route::get('/peliculas', [MovieController::class, 'viewIndex']);
Route::get('/pelicula/{id}', [MovieController::class, 'viewShow']);

Route::get('/funciones', [MovieController::class, 'viewPlays']);
Route::get('/comprar-boletos/{id}', [MovieController::class, 'viewSeats']);

