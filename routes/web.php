<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RNPController;
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

Route::get('/rnp', function () {
    return view('rnp');
})->middleware(['auth', 'verified'])->name('rnp');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Post Related Routes
Route::get('/create-post', [PostController::class, 'create']);
Route::post('/create-post', [PostController::class, 'store']);
Route::get('/single-post/{post:post_slug}', [PostController::class, 'singlePost'])->name('single-post');
Route::get('/single-post/{post:post_slug}/edit', [PostController::class, 'editPost'])->name('edit-post');
Route::put('/single-post/{post:post_slug}', [PostController::class, 'update']); 
Route::delete('/single-post/{post:post_slug}/delete', [PostController::class, 'destroy']); 

// Spatie Related Routes
Route::get('/create-rnp', [RNPController::class, 'indexPermission']);
Route::get('/create-permission', [RNPController::class, 'createPermission'])->name('permissions.create');
Route::post('/create-permission', [RNPController::class, 'storePermission'])->name('permissions.store');
Route::get('/all-permissions', [RNPController::class, 'allPermissions']);
Route::get('/single-permission/{permission:id}/edit', [RNPController::class, 'showEditPermission'])->name('permissions.edit');
Route::put('/single-permission/{permission:id}', [RNPController::class, 'updatePermission']);
Route::delete('/single-permission/{permission:id}/delete', [RNPController::class, 'deletePermission']);

// Role Related Routes
Route::get('/add-role', [RNPController::class, 'createRole']);
Route::post('/add-role', [RNPController::class, 'storeRole']);
Route::get('/all-roles', [RNPController::class, 'allRoles']);
Route::get('/single-role/{role:id}/edit', [RNPController::class, 'editRole']);
Route::put('/single-role/{role:id}', [RNPController::class, 'updateRole']);
Route::delete('/single-role/{role:id}/delete', [RNPController::class, 'deleteRole']);

Route::get('/list-of-users', [RNPController::class, 'indexUsers'])->name('users.index');
Route::post('/list-of-users/{user}/assign-role', [RNPController::class, 'assignRole'])->name('users.assign-role');




require __DIR__.'/auth.php';
