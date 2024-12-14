<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalController;


Route::get('/baru/home', [HalController::class, 'showHome'])->name("topmenu1");

Route::get('/baru/about', [HalController::class, 'showAbout'])->name('topmenu2');

Route::get('/baru/contact', [HalController::class, 'showContact'])->name('topmenu3');

Route::resource('biodata', BiodataController::class);
