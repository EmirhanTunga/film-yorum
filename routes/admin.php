<?php

use App\Http\Controllers\Panel\AdminController;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\CommentController;
use App\Http\Controllers\Panel\ContactController;
use App\Http\Controllers\Panel\GeneralController;
use App\Http\Controllers\Panel\SettingController;
use App\Http\Controllers\Panel\TaxiDriverController;
use App\Http\Controllers\Panel\TaxistationController;
use App\Http\Controllers\Panel\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\MovieController;
use App\Http\Controllers\Panel\CategoryController;



Route::group(['prefix' => '', 'middleware' => ['auth:admin']], function () {

    Route::any('', [GeneralController::class, 'index'])->name('panel.index');

    Route::group(['prefix' => 'admin'], function () {
        Route::any('', [AdminController::class, 'list'])->name('panel.admin_list');
        Route::get('form/{unique?}', [AdminController::class, 'form'])->name('panel.admin_form');
        Route::post('form/{unique?}', [AdminController::class, 'save'])->name('panel.admin_save');
        Route::delete('delete', [AdminController::class, 'delete'])->name('panel.admin_delete');
    });

    Route::get('profile', [AdminController::class, 'profile'])->name('panel.profile');
    Route::post('profile', [AdminController::class, 'profile_save'])->name('panel.profile_save');

    Route::group(['prefix' => 'movies'], function () {
        Route::get('/', [MovieController::class, 'index'])->name('panel.movies.index');
        Route::get('create', [MovieController::class, 'create'])->name('panel.movies.create');
        Route::post('store/{unique?}', [MovieController::class, 'store'])->name('panel.movies.store');
        Route::get('delete/{id}', [MovieController::class, 'destroy'])->name('panel.movies.delete');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('panel.categories.index');
        Route::post('/store', [CategoryController::class, 'store'])->name('panel.categories.store');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('panel.categories.delete');
    });
});

Route::get('login', [AuthController::class, 'login'])->name('panel.login');
Route::post('login', [AuthController::class, 'access'])->name('panel.access');
Route::get('logout', [AuthController::class, 'logout'])->name('panel.logout');
