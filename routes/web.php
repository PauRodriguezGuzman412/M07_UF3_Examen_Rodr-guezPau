<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get("/user",UserController::class)->name("user");
Route::post('/user/validate',[UserController::class,'login'])->name('user.validate');
Route::get("/user/index",[UserController::class, 'index'])->name("user.index");
Route::get("/user/logout",[UserController::class,'logout'])->name("user.logout");

Route::get("/index",[UserController::class,'index'])->middleware(['auth','isUser'])->name("index");
