<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Services\User\StoreUserService;
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
    public function show(){

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
