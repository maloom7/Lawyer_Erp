<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// تعريف المسارات لقضايا Kase
Route::get('/kases', [KaseController::class, 'index'])->name('kases.index');
Route::get('/kases/create', [KaseController::class, 'create'])->name('kases.create');
Route::post('/kases', [KaseController::class, 'store'])->name('kases.store');
Route::get('/kases/{id}', [KaseController::class, 'show'])->name('kases.show');
Route::get('/kases/{id}/edit', [KaseController::class, 'edit'])->name('kases.edit');
Route::put('/kases/{id}', [KaseController::class, 'update'])->name('kases.update');
Route::delete('/kases/{id}', [KaseController::class, 'destroy'])->name('kases.destroy');

// تعريف المسارات للمهام Task
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

// تعريف المسارات للفواتير Invoice
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');

// تعريف المسارات للجلسات Session
Route::get('/sessions', [SessionController::class, 'index'])->name('sessions.index');
