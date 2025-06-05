<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\PreSchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::middleware(['admin'])->group(function(){
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
});  

// preschool
Route::post('store',[PreSchoolController::class, 'store'])->name('preschool.submit');
// preschool


// login
Route::get('/login',[LoginController::class,'login'])->name('login.view');
Route::post('/login/submit',[LoginController::class ,'loggedIn'])->name('login.submit');
Route::post('/logout',[LoginController::class, 'logout'])->name('admin.logout');
// login