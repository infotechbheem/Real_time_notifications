<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post');
});


Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/notifications', function(){
    return view('notification');
});