<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

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
    return view('pages.home');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{title}', [PostController::class, 'show']);
Route::get('/createpost', [PostController::class, 'showCreatePost']);
Route::post('/createpost', [PostController::class, 'store']);
Route::post('/createcomment', [CommentsController::class, 'store']);
Route::get('/table', [PostController::class, 'showTable']);
Route::get('/deletepost/{id}', [PostController::class, 'destroy']);