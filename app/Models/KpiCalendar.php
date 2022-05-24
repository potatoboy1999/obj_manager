<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KpiCalendar extends Model
{
    use HasFactory;

    protected $table = "kpi_calendar";
    public $timestamps = true;

    protected $fillable = [
        'kpi_id',
        'month',
        'year',
        'value',
        'type',
        'status',
    ];

    public function kpi(){
        return $this->belongsTo(Kpi::class, "kpi_id", "id");
    }
}
