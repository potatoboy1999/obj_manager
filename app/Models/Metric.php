<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;
    protected $table = "metrics";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'symbol',
        'status',
    ];

    public function kpis(){
        return $this->hasMany(Kpi::class,"metric_id","id");
    }
}
