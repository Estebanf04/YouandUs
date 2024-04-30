<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;

Route::get('/', function () {return view('principio');})->name('inicio');
Route::get('/dashboard', [ImageController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (){
    //Profile
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get('/avatar/{filename}', [ProfileController::class, 'getImage'])->name('avatar');
        Route::get('/miperfil', [ProfileController::class, 'myProfile'])->name('miperfil');
        Route::get('/profile/{user}', [ProfileController::class, 'specificProfile'])->name('perfilparticular');

    //Publication
        Route::get('/crearpublicacion', [ImageController::class, 'createPublication'])->name('create');
        Route::post('/guardarpublicacion', [ImageController::class, 'savePublication'])->name('save');
        Route::get('/getImage/{filename}', [ImageController::class, 'getImage'])->name('getImage');
        Route::get('/editImage/{image}', [ImageController::class, 'editImage'])->name('edit');
        Route::post('/update/{image}', [ImageController::class, 'updateImage'])->name('update');
        Route::get('/delete/{image}', [ImageController::class, 'deleteImage'])->name('delete');
        Route::get('/publication/{image}', [ImageController::class, 'singlePublication'])->name('single');

    //Comment
        Route::post('/comment/{image}', [CommentController::class, 'saveComment'])->name('saveComment');
        Route::get('/comment/{comment}', [CommentController::class, 'destroyComment'])->name('destroyComment');

    //Search
        Route::post('/search', [SearchController::class, 'search'])->name('search');
});

require __DIR__.'/auth.php';
