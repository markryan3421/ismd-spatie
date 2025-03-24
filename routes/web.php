<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // display all the posts he/she only owns
    $posts = Post::where('user_id', Auth::id())->get();

    return view('dashboard', compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/create-post', [PostController::class, 'create']);
Route::post('/create-post', [PostController::class, 'store']);
Route::get('/single-post/{post:post_slug}', [PostController::class, 'singlePost'])->name('single-post');
Route::get('/single-post/{post:post_slug}/edit', [PostController::class, 'editPost'])->name('edit-post');
Route::put('/single-post/{post:post_slug}', [PostController::class, 'update']); 
Route::delete('/single-post/{post:post_slug}/delete', [PostController::class, 'destroy']); //12 delete



require __DIR__.'/auth.php';
