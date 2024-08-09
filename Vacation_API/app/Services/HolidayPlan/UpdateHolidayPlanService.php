<?php

namespace App\Services\HolidayPlan;

class UpdateHolidayPlanService
{
    public function run($data, $plan)
    {
        $plan->update($data['plan']);

        return $plan;
    }
}
