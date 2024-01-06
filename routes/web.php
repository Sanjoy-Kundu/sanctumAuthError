<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// web api
Route::post('/user-registration', [UserController::class, "userRegistration"]);
Route::post('/user-login', [UserController::class, "userLogin"])->name("userLogin");
// Route::get('/user-profile', [UserController::class,"userProfile"])->middleware(['auth:sanctum']);
Route::get('/user-profile', [UserController::class,"userProfile"])->middleware('auth:sanctum');
Route::get('/logout', [UserController::class, "logout"]);







Route::view("/", 'pages.home')->name("home");
Route::view('/userLogin', "pages.auth.login")->name('login');
Route::view('/userRegistration', "pages.auth.registration")->name('registration');
Route::view('/userProfile', 'pages.auth.profile');


