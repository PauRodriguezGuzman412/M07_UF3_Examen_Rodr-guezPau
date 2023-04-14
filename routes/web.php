<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MascotasController;

Route::get("/login",MascotasController::class)->name("login");
Route::post('/login/validate',[MascotasController::class,'login'])->name('validate');
Route::get("/login/logout",[MascotasController::class,'logout'])->name("logOut");

Route::get("/",[MascotasController::class,'index'])->name("index");
Route::get("/register",[MascotasController::class,'register'])->name("register");
Route::post("/register",[MascotasController::class,'store'])->name("store");
Route::get("/foto/{foto}/{nick}",[MascotasController::class,'foto'])->name("foto");
