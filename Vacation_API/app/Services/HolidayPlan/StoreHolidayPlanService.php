<?php

namespace App\Services\HolidayPlan;

use App\Models\HolidayPlan;

class StoreHolidayPlanService
{
    private HolidayPlan $plan;

    public function __construct(HolidayPlan $plan)
    {
        $this->plan = $plan;
    }

    public function run(array $data)
    {
        $user = auth()->user();
        $data['plan']['user_id'] = $user->id;

        return $this->plan->create($data['plan']);
    }
}
