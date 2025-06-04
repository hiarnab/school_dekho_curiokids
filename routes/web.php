<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::get('/login',[LoginController::class,'login'])->name('login');