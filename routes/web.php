<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{QrCodeController};
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
    return view('welcome');
})->name('home');

Route::prefix('qr-codes')->group(function () {
    Route::name('qr.')->group(function () {
        Route::get('/', [QrCodeController::class, 'index'])->name('index');
        Route::get('/create', [QrCodeController::class, 'create'])->name('create');
        Route::post('/', [QrCodeController::class, 'store'])->name('store');
        Route::get('/{id}', [QrCodeController::class, 'show'])->name('show');
        Route::get('/{id}/edit', [QrCodeController::class, 'edit'])->name('edit');
        Route::put('/{id}', [QrCodeController::class, 'update'])->name('update');
        Route::delete('/{id}', [QrCodeController::class, 'destroy'])->name('destroy');
    });
});
