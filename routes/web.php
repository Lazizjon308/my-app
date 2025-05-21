<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');

Route::get('/increase', [BalanceController::class, 'plusBalance'])->name('balance.increase');

Route::get('/decrease', [BalanceController::class, 'minusBalance'])->name('balance.decrease');

Route::post('/soqqaPlus', [BalanceController::class, 'soqqaPlus'])->name('balance');

Route::post('/soqqaMinus', [BalanceController::class, 'soqqaMinus'])->name('balance.#');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

Route::post('/balance/store', [BalanceController::class, 'store'])->name('balance.store');
