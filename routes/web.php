<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::fallback(function () {
    return view('errors/not-found');
});

Route::prefix('articles')->group(function () {
    Route::get('creer', [ArticleController::class, 'creer']);
    Route::get('modifier/{id}', [ArticleController::class, 'modifier']);
    Route::get('supprimer/{id}', [ArticleController::class, 'supprimer']);
    Route::get('{id}', [ArticleController::class, 'show'])->name('article.details');
});