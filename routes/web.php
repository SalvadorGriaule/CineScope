<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PlatformController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get("/subscribe", 'subView');
    Route::post('/subscribe', 'subscribe');
    Route::get("/login", 'authPage')->name("login");
    Route::post('/login', 'auth');
    Route::get("/logout","logout");
});

Route::prefix("admin")->group(function() {
     Route::middleware("auth")->group(function() {
        Route::get("/films",[FilmController::class,"create"]);
        Route::post("/films",[FilmController::class,"store"]);
        Route::get("/platforms",[PlatformController::class,"create"]);
        Route::post("/platforms",[PlatformController::class,"store"]);
    });
});
