<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportActivity extends Model
{
    use HasFactory;

    protected $table = "report_activities";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'status',
    ];

    public function travelSchedule(){
        return $this->belongsTo(TravelSchedule::class,"travel_schedule_id","id");
    }

    public function travelActivity(){
        return $this->belongsTo(TravelActivity::class,"travel_activities_id","id");
    }
}
