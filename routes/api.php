<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
    return response('Hello World', 200)->header('Content-Type', 'text/plain');
});

// Category
Route::resource('categories', CategoryController::class);

// Director
Route::resource('directors', DirectorController::class);

// Movie
Route::resource('movies', MovieController::class);
Route::post('/movies/get/plays', [MovieController::class, 'getPlays']);
Route::post('/movies/upload/cover', [MovieController::class, 'uploadCover']);
Route::post('/movies/get/movies/post', [MovieController::class, 'indexPost']);
// Room
Route::resource('rooms', RoomController::class);
