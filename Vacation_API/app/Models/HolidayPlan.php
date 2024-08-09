<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HolidayPlan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'holiday_plan';

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'participants',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id', 'user_id',);
    }
}
