<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

Route::get('/dashboard',[DashboardController::class,'index'])
    ->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
});

require __DIR__ . '/auth.php';

Route::post('/posts/{post}/approve',[PostController::class,'approve']);

Route::get('/posts/create', [PostController::class, 'create'])
->name('posts.create');

Route::get('/posts', [PostController::class, 'index'])
->name('posts.index');