<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Cms\DashboardController;
use App\Http\Controllers\Cms\DeptController;
use App\Http\Controllers\Cms\GenerationController;
use App\Http\Controllers\Cms\MemberController;
use App\Http\Controllers\Cms\NewsController;
use App\Http\Controllers\Cms\PositionController;
use App\Http\Controllers\Cms\New_MemberController;
use App\Http\Controllers\Contoh\ContohController;
use App\Http\Controllers\Cms\EventController;
use App\Http\Controllers\Cms\QuestionController;
use App\Http\Controllers\Cms\DetailRequestController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('daftar_pena', [HomeController::class, 'form'])->name('form.index');
Route::post('regist_data', [HomeController::class, 'insert'])->name('form.insert');

Route::prefix('auth')->group(function () {
    Route::get('index', [AuthController::class, 'login'])->name('login');
    Route::post('check', [AuthController::class, 'check'])->name('auth.check');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->group(function () {
        Route::get('index', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    Route::prefix('news')->group(function () {
        Route::get('index', [NewsController::class, 'index'])->name('news.index');
        Route::post('create', [NewsController::class, 'create'])->name('news.create');
        Route::get('getspecdata/{id}', [NewsController::class, 'edit']);
        Route::post('update', [NewsController::class, 'update'])->name('news.update');
        Route::delete('deletespecdata/{id}', [NewsController::class, 'delete']);
    });

    Route::prefix('departement')->group(function () {
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
    Route::group(['prefix' => 'new_member'], function () {
        Route::get('index', [New_MemberController::class, 'index'])->name('new_member.index');
        Route::post('create', [New_MemberController::class, 'create'])->name('new_member.create');
        Route::get('getspecdata/{id}', [New_MemberController::class, 'edit']);
        Route::post('update', [New_MemberController::class, 'update'])->name('new_member.update');
        Route::delete('deletespecdata/{id}', [New_MemberController::class, 'delete']);
    });
    Route::prefix('event')->group(function () {
        Route::get('index', [EventController::class, 'index'])->name('event.index');
        Route::post('create', [EventController::class, 'create'])->name('event.create');
        Route::get('getspecdata/{id}', [EventController::class, 'edit']);
        Route::post('update', [EventController::class, 'update'])->name('event.update');
        Route::delete('deletespecdata/{id}', [EventController::class, 'delete']);
    });
    Route::prefix('question')->group(function () {
        Route::get('index', [QuestionController::class, 'index'])->name('question.index');
        Route::post('create', [QuestionController::class, 'create'])->name('question.create');
        Route::get('getspecdata/{id}', [QuestionController::class, 'edit']);
        Route::post('update', [QuestionController::class, 'update'])->name('question.update');
        Route::delete('deletespecdata/{id}', [QuestionController::class, 'delete']);
    });
    Route::prefix('resultReq')->group(function () {
        Route::get('index', [DetailRequestController::class, 'index'])->name('resultreq.index');
        Route::post('create', [DetailRequestController::class, 'create'])->name('resultreq.create');
        Route::get('getspecdata/{id}', [DetailRequestController::class, 'edit']);
        Route::post('update', [DetailRequestController::class, 'update'])->name('resultreq.update');
        Route::delete('deletespecdata/{id}', [DetailRequestController::class, 'delete']);
    });
});
