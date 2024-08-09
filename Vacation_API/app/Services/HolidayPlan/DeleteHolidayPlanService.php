<?php

namespace App\Services\HolidayPlan;

class DeleteHolidayPlanService
{

    public function run($plan)
    {
        $plan->delete();

        return 'The plan was deleted sucessfully';
    }
}
