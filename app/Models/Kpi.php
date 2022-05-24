<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    use HasFactory;
    
    protected $table = "kpis";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'metric_id',
        'status',
    ];

    public function kpi_calendar(){
        return $this->hasMany(KpiCalendar::class,"kpi_id","id");
    }

    public function metric(){
        return $this->belongsTo(Metric::class,"metric_id","id");
    }

    public function objectives(){
        return $this->belongsToMany(Objective::class,"obj_kpi","kpi_id",'objective_id');
    }
}
