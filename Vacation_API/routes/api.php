<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpFoundation\Response;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\HolidayPlanController;
use \Illuminate\Auth\Middleware\Authenticate;

Route::prefix('auth')->name('auth.')->group(function (){
    Route::post('/login',[AuthController::class, 'login']);
    Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::prefix('user')->middleware('auth:sanctum')->name('user.')->group( function(){
    Route::get('/', [UserController::class, 'index']);
    Route::put('/{user}', [UserController::class, 'update']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::delete('/{user}', [UserController::class, 'destroy']);
});
Route::post('/user/', [UserController::class, 'store']);

Route::prefix('plan')->middleware('auth:sanctum')->name('plan.')->group(function (){
    Route::get('/',[HolidayPlanController::class, 'index']);
    Route::get('/{id}',[HolidayPlanController::class, 'show']);
    Route::post('/', [HolidayPlanController::class, 'store']);
    Route::put('/{plan}', [HolidayPlanController::class, 'update']);
    Route::delete('/{plan}',[HolidayPlanController::class, 'destroy']);
});


Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found',
        'code' => Response::HTTP_NOT_FOUND,
    ], 404);
});


