<?php

use App\Http\Controllers\Cms\DeptController;
use App\Http\Controllers\Cms\GenerationController;
use App\Http\Controllers\Cms\MemberController;
use App\Http\Controllers\Cms\NewsController;
<<<<<<< HEAD
use App\Http\Controllers\Cms\PositionController;
=======
use App\Http\Controllers\Cms\New_MemberController;
>>>>>>> 802b81d10e72fea07e086afaf37cb0db37126ad9
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

Route::prefix('position')->group(function () {
    Route::get('index', [PositionController::class, 'index'])->name('position.index');
    Route::post('create', [PositionController::class, 'create'])->name('position.create');
    Route::get('getspecdata/{id}', [PositionController::class, 'edit']);
    Route::post('update', [PositionController::class, 'update'])->name('position.update');
    Route::delete('deletespecdata/{id}', [PositionController::class, 'delete']);
});

Route::prefix('generation')->group(function () {
    Route::get('index', [GenerationController::class, 'index'])->name('generation.index');
    Route::post('create', [GenerationController::class, 'create'])->name('generation.create');
    Route::get('getspecdata/{id}', [GenerationController::class, 'edit']);
    Route::post('update', [GenerationController::class, 'update'])->name('generation.update');
    Route::delete('deletespecdata/{id}', [GenerationController::class, 'delete']);
});

Route::prefix('member')->group(function () {
    Route::get('index', [MemberController::class, 'index'])->name('member.index');
    Route::post('create', [MemberController::class, 'create'])->name('member.create');
    Route::get('getspecdata/{id}', [MemberController::class, 'edit']);
    Route::post('update', [MemberController::class, 'update'])->name('member.update');
    Route::delete('deletespecdata/{id}', [MemberController::class, 'delete']);
});
Route::group(['prefix' => 'new_member'], function() {
    Route::get('index', [New_MemberController::class, 'index'])->name('new_member.index');
    Route::post('create', [New_MemberController::class, 'create'])->name('new_member.create');
    Route::get('getspecdata/{id}', [New_MemberController::class, 'edit']);
    Route::post('update', [New_MemberController::class, 'update'])->name('new_member.update');
    Route::delete('deletespecdata/{id}', [New_MemberController::class, 'delete']);
});

