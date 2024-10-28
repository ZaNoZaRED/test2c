<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\OffersController;

Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::post('/', [PostsController::class, 'create'])->name('posts.create');
Route::get('/c', [ComplaintsController::class, 'index'])->name('complaints.index');
Route::get('/o', [OffersController::class, 'index'])->name('offers.index');
