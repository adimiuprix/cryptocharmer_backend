<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiteController;

Route::get('/', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/content', [SiteController::class, 'content'])->name('admin.content');
Route::get('/create', [SiteController::class, 'create'])->name('admin.create');
Route::post('/store', [SiteController::class, 'store'])->name('admin.store');
Route::get('/edit/{id}', [SiteController::class, 'edit'])->name('admin.edit');
Route::post('/update/{id}', [SiteController::class, 'update'])->name('admin.update');
Route::get('/delete/{id}', [SiteController::class, 'delete'])->name('admin.delete');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
