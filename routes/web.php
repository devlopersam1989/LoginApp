<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\UserAuthendicationMiddleware;

Route::get('/login', function () {
    return view('login');
});

Route::middleware(['auth'])->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    });    
    //Route::post('/login', [UserController::class, 'index']);
});

Route::get('loginRegister', function () {
    return view('loginRegister');
});

Route::post('/login', [UserController::class, 'index'])->name('login-user'); 
//Route::post('/login', [UserController::class, 'loginPageValidation'])->name('loginPageValidation'); 
Route::post('loginRegister', [UserController::class, 'loginPageValidation'])->name('loginPageValidation'); 
Route::get('test', [TestController::class, 'index']);