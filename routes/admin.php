<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/categories', CategoryController::class)
    ->except('show');

Route::resource('/posts', PostController::class)
    ->except('show');