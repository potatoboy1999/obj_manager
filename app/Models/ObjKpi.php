<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjKpi extends Model
{
    use HasFactory;

    protected $table = "obj_kpi";
    public $timestamps = true;

    protected $fillable = [
        'kpi_id',
        'objective_id',
        'status'
    ];

    public function objective(){
        return $this->belongsTo(Objective::class,'objective_id','id');
    }
    
    public function kpi(){
        return $this->belongsTo(Kpi::class,'kpi_id','id');
    }
}
