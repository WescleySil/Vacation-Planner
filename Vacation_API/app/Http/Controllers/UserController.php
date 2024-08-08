<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Services\User\DeleteUserService;
use App\Services\User\ShowUserService;
use App\Services\User\StoreUserService;
use App\Services\User\UpdateUserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\IndexUserRequest;
use App\Services\User\IndexUserService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexUserRequest $indexUserRequest, IndexUserService $indexUserService): AnonymousResourceCollection
    {

        $data = $indexUserRequest->validated();
        $users = $indexUserService->run($data);

        return UserResource::collection($users);
    }

    /**
     * Show a specified resource
     */
    public function show(Request $request, ShowUserService $showUserService): AnonymousResourceCollection | JsonResponse {


        $user = $showUserService->run($request);

        return UserResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $storeUserRequest, StoreUserService $storeUserService) : Response
    {
        $data = $storeUserRequest->validated();
        $user = $storeUserService->run($data);

        return response(new UserResource($user));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $updateUserRequest, UpdateUserService $updateUserService, User $user) : Response | JsonResponse
    {
        $data = $updateUserRequest->validated();
        if(empty($data)){
            return response()->json("{'message':'No updates were requested'}");
        }
        $user = $updateUserService->run($data, $user);

        return response(new UserResource($user));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteUserService $deleteUserService, User $user)
    {
        $response = $deleteUserService->run($user);

        return response($response);
    }
}
