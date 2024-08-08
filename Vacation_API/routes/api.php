<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpFoundation\Response;


Route::prefix('user')->name('user.')->group( function(){
   Route::get('/', [UserController::class, 'index']);
   Route::post('/', [UserController::class, 'store']);
});


Route::fallback(function () {
    return response()->json([
        'message' => 'Page Not Found',
        'code' => Response::HTTP_NOT_FOUND,
    ], 404);
});


