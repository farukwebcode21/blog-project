<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CommentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/blog-posts', [BlogPostController::class, 'blogPos']);
// Route::get('/blog-posts/{id}', [BlogPostController::class, 'showblogpost']);
// Route::get('/comments', [CommentController::class, 'comments']);

Route::get('/blog-posts', [BlogPostController::class, 'index']);
Route::get('/blog-posts/{id}', [BlogPostController::class, 'show']);
Route::post('/comments', [CommentController::class, 'store']);
