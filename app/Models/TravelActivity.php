<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelActivity extends Model
{
    use HasFactory;

    protected $table = "travel_activities";
    public $timestamps = true;

    protected $fillable = [
        'description',
        'type',
        'travel_schedule_id',
        'status',
    ];

    public function travel_schedule(){
        return $this->belongsTo(TravelSchedule::class,"travel_schedule_id","id");
    }

    public function report_activities(){
        return $this->hasMany(ReportActivity::class,"report_activities_id","id");
    }
}
