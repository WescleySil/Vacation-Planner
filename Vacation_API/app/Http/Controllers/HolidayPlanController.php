<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexHolidayPlanRequest;
use App\Http\Requests\StoreHolidayPlanRequest;
use App\Http\Requests\UpdateHolidayPlanRequest;
use App\Http\Resources\HolidayPlanResource;
use App\Models\HolidayPlan;
use App\Services\HolidayPlan\DeleteHolidayPlanService;
use App\Services\HolidayPlan\IndexHolidayPlanService;
use App\Services\HolidayPlan\ShowHolidayPlanService;
use App\Services\HolidayPlan\StoreHolidayPlanService;
use App\Services\HolidayPlan\UpdateHolidayPlanService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Http\Request;



class HolidayPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexHolidayPlanRequest $indexHolidayPlanRequest, IndexHolidayPlanService $indexHolidayPlanService): JsonResponse
    {
        $data = $indexHolidayPlanRequest->validated();
        $plans = $indexHolidayPlanService->run($data);

        return response()->json(HolidayPlanResource::collection($plans));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHolidayPlanRequest $storeHolidayPlanRequest, StoreHolidayPlanService $storeHolidayPlanService): JsonResponse
    {
        $data = $storeHolidayPlanRequest->validated();
        $plan = $storeHolidayPlanService->run($data);

        return response()->json(new HolidayPlanResource($plan));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, ShowHolidayPlanService $showHolidayPlanService): JsonResponse
    {
        $plan = $showHolidayPlanService->run($request);

        return response()->json(HolidayPlanResource::collection($plan));
    }

    /**
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHolidayPlanRequest $updateHolidayPlanRequest,UpdateHolidayPlanService $updateHolidayPlanService, HolidayPlan $plan): JsonResponse
    {
        $data = $updateHolidayPlanRequest->validated();
        if(empty($data)){
            return response()->json("{'message':'No updates were requested'}");
        }

        $plan = $updateHolidayPlanService->run($data,$plan);

        return response()->json(new HolidayPlanResource($plan));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteHolidayPlanService $deleteHolidayPlanService, HolidayPlan $plan): JsonResponse
    {
        $response = $deleteHolidayPlanService->run($plan);

        return response()->json($response);
    }
}
