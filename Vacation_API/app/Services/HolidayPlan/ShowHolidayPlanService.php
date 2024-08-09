<?php

namespace App\Services\HolidayPlan;

use App\Models\HolidayPlan;

class ShowHolidayPlanService
{
    private HolidayPlan $plan;

    public function __construct(HolidayPlan $plan){
        $this->plan = $plan;
    }
    public function run($request)
    {
        $id = $request->id;

        $query = $this->plan
            ->when($id, function ($query) use ($id){
                return $query->where('id', $id);
            });
        return $query->get();
    }
}
