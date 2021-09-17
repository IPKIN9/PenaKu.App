<?php

use App\Http\Controllers\Cms\DeptController;
use App\Http\Controllers\Cms\NewsController;
use App\Http\Controllers\Contoh\ContohController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Cms.Dashboard');
})->name('ds.index');

Route::prefix('Contoh')->group(function () {
    Route::get('index', [ContohController::class, 'index'])->name('contoh.index');
    Route::post('create', [ContohController::class, 'create'])->name('contoh.create');
    Route::get('getspecdata/{id}', [ContohController::class, 'edit']);
    Route::post('update', [ContohController::class, 'update'])->name('contoh.update');
    Route::delete('deletespecdata/{id}', [ContohController::class, 'delete']);
});

Route::prefix('News')->group(function () {
    Route::get('index', [NewsController::class, 'index'])->name('news.index');
    Route::post('create', [NewsController::class, 'create'])->name('news.create');
    Route::get('getspecdata/{id}', [NewsController::class, 'edit']);
    Route::post('update', [NewsController::class, 'update'])->name('news.update');
    Route::delete('deletespecdata/{id}', [NewsController::class, 'delete']);
});

Route::prefix('Departement')->group(function () {
    Route::get('index', [DeptController::class, 'index'])->name('departement.index');
    Route::post('create', [DeptController::class, 'create'])->name('departement.create');
    Route::get('getspecdata/{id}', [DeptController::class, 'edit']);
    Route::post('update', [DeptController::class, 'update'])->name('departement.update');
    Route::delete('deletespecdata/{id}', [DeptController::class, 'delete']);
});
