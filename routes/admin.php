<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/categories', CategoryController::class)
    ->except('show');

Route::resource('/posts', PostController::class)
    ->except('show');

Route::resource('/roles', RoleController::class)
    ->except('show');

Route::resource('/permissions', PermissionController::class)
    ->except('show');