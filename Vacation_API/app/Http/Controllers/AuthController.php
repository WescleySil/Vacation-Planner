<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\Auth\LoginService;
use App\Services\Auth\LogoutService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest, LoginService $loginService): JsonResponse{

        $data = $loginRequest->validated();
        $response = $loginService->run($data);


        if(!$response){
            return response()->json('Email and password incorrect', 401);
        }

        return response()->json($response);
    }

    public function logout(LogoutService $logoutService): JsonResponse{

        $response = $logoutService->run();

        return response()->json($response);
    }
}
