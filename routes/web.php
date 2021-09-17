<?php

use App\Http\Controllers\Contoh\ContohController;
use App\Http\Controllers\Event\EventController;
use App\Http\Controllers\Question\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Cms.Dashboard');
});

Route::prefix('Contoh')->group(function () {
    Route::get('index', [ContohController::class, 'index'])->name('contoh.index');
    Route::post('create', [ContohController::class, 'create'])->name('contoh.create');
    Route::get('getspecdata/{id}', [ContohController::class, 'edit']);
    Route::post('update', [ContohController::class, 'update'])->name('contoh.update');
    Route::delete('deletespecdata/{id}', [ContohController::class, 'delete']);
});
Route::prefix('Event')->group(function () {
    Route::get('index', [EventController::class, 'index'])->name('event.index');
    Route::post('create', [EventController::class, 'create'])->name('event.create');
    Route::get('getspecdata/{id}', [EventController::class, 'edit']);
    Route::post('update', [EventController::class, 'update'])->name('event.update');
    Route::delete('deletespecdata/{id}', [EventController::class, 'delete']);
});
Route::prefix('Question')->group(function () {
    Route::get('index', [QuestionController::class, 'index'])->name('question.index');
    Route::post('create', [QuestionController::class, 'create'])->name('question.create');
    Route::get('getspecdata/{id}', [QuestionController::class, 'edit']);
    Route::post('update', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('deletespecdata/{id}', [QuestionController::class, 'delete']);
});