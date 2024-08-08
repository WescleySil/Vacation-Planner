<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpFoundation\Response;
use \App\Http\Controllers\AuthController;
use \Illuminate\Auth\Middleware\Authenticate;

Route::prefix('auth')->name('auth.')->group(function (){
    Route::post('/login',[AuthController::class, 'login']);
});

Route::prefix('user')->name('user.')->group( function(){
   Route::get('/', [UserController::class, 'index'])->middleware(Authenticate::using('sanctum'));
   Route::post('/', [UserController::class, 'store']);
});


Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found',
        'code' => Response::HTTP_NOT_FOUND,
    ], 404);
});


