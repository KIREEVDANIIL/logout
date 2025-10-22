<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('login',[UserController::class,'loginIndex'])->name('loginIndex');
Route::post('login',[UserController::class,'login'])->name('login');

Route::get('register',[UserController::class,'registerIndex'])->name('registerIndex');
Route::post('register',[UserController::class,'register'])->name('register');



Route::middleware('auth')->group(function(){
    Route::get('logout',[UserController::class,'logout'])->name('logout');
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard.home');
});


Route::middleware(['auth','admin']) ->group(function(){
    Route::get('dashboard/users', [AdminController::class, 'usersIndex'])->name('dashboard.users.index');
    Route::delete('dashboard/users/{user}', [AdminController::class, 'usersDelete'])->name('dashboard.users.delete');
});

Route::get('secret', function(){

    return 'ssdfsdfsd';

})->middleware('secret');
