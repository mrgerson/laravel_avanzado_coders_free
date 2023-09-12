<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Models\Image;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/posts/{post}/image', [PostController::class, 'image'])
    ->name('posts.image');

Route::post('images/upload', [ImageController::class, 'upload'])
    ->name('images.upload');

Route::get('prueba', function(){
    $files = Storage::files('images');
    $images = Image::pluck('path')->toArray();

    Storage::delete(array_diff($files, $images));
});