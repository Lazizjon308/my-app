<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/increase', [BalanceController::class, 'plusBalanceInterface'])->name('balance.increase');
Route::get('/decrease', [BalanceController::class, 'minusBalanceInterface'])->name('balance.decrease');
Route::post('/amountPlus', [BalanceController::class, 'amountPlus'])->name('balance.plus');
Route::post('/amountMinus', [BalanceController::class, 'amountMinus'])->name('balance.minus');
Route::get('/balance.index', [BalanceController::class, 'index'])->name('balance.index');
//Route::post('/balance/store', [BalanceController::class, 'store'])->name('balance.store');

Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');


