<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/teman', [TemanController::class, 'index'])->name('datateman');
Route::get('/teman/{id}', [TemanController::class, 'temandetail'])->name('tmdetail');