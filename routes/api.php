<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::get('/content', [ContentController::class, 'index'])->name('content.index');
