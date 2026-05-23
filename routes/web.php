<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OwnerController;
use App\Models\Owner;
use Illuminate\Support\Facades\Route;


route::group(['middleware' => 'auth'], function () {
    Route::get('/', [OwnerController::class, 'index'])->name('owner.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('cars', CarController::class)->only(['index']);

    Route::group(['middleware' => [\App\Http\Middleware\Testas::class]], function () {
        Route::get('/Owner/create', [OwnerController::class, 'create'])->name('owner.create');
        Route::get('/Owner/{id}/edit/', [OwnerController::class, 'edit'])->name('owner.edit');
        Route::post('/Owner',[OwnerController::class, 'store'])->name('owner.store');
        Route::put('/Owner/{owner}', [OwnerController::class, 'update'])->name('owner.update');
        Route::get('/Owner/{id}/destroy', [OwnerController::class, 'destroy'])->name('owner.destroy');
        Route::resource('cars', CarController::class)->except(['index', 'destroy']);
        Route::get('/Car/{id}/destroy', [CarController::class, 'destroy'])->name('cars.destroy');
    });
});

Auth::routes();


