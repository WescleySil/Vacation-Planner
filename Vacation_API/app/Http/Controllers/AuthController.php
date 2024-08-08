<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\Auth\LoginService;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest, LoginService $loginService): Response{

        $data = $loginRequest->validated();
        $response = $loginService->run($data);

        return response($response);
    }
}
