<?php

namespace App\Services\HolidayPlan;

use App\Models\HolidayPlan;

class IndexHolidayPlanService
{
    private HolidayPlan $plan;

    public function __construct(HolidayPlan $plan){
        $this->plan = $plan;
    }
    public function run($data)
    {
        $title = $data['filters']['title'] ?? null;
        $description = $data['filters']['description'] ?? null;
        $date = $data['filters']['date'] ?? null;
        $location = $data['filters']['location'] ?? null;
        $userId = $data['filters']['userId'] ?? null;

        $query= $this->plan
            ->when($title, function ($query) use ($title){
                return $query->where('title','like', '%'.$title.'%');
            })
            ->when($description, function($query) use ($description){
                return $query->where('description','like','%'.$description.'%');
            })
            ->when($date, function ($query) use ($date){
                return $query->where('date',$date);
            })
            ->when($location, function($query) use ($location){
                return $query->where('location','like', '%'.$location.'%');
            })
            ->when($userId, function ($query) use ($userId){
                return $query->where('user_id', $userId);
            });

        return $query->get();
    }
}
