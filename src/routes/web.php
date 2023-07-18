<?php

use Illuminate\Support\Facades\Route;
use Sashagm\Themes\Http\Controllers\ThemesController;
use Sashagm\Messages\Http\Controllers\DialogController;
use Sashagm\Messages\Http\Controllers\MessageController;





Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'dialogs'], function () {

    Route::get('/', [DialogController::class, 'index'])->name('messages::dialogs.index');
    Route::get('/create', [DialogController::class, 'create'])->name('messages::dialogs.create');
    Route::post('/', [DialogController::class, 'store'])->name('messages::dialogs.store');
    Route::get('/{dialog}', [DialogController::class, 'show'])->name('messages::dialogs.show');
    Route::post('delete/{dialog}', [DialogController::class, 'destroy'])->name('messages::dialogs.destroy');

    Route::get('/messages', [MessageController::class, 'index'])->name('messages::index');
    Route::get('/messages/create', [MessageController::class, 'create'])->name('messages::create');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages::store');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages::show');
    Route::get('/messages/{id}/edit', [MessageController::class, 'edit'])->name('messages::edit');
    Route::put('/messages/{id}', [MessageController::class, 'update'])->name('messages::update');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages::destroy');


});


