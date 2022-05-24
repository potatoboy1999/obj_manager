<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;

    protected $table = "objectives";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'theme',
        'date_start',
        'date_end',
        'status',
        'comments',
    ];

    public function theme(){
        return $this->belongsTo(Theme::class, "themes_id","id");
    }
    public function kpis(){
        return $this->belongsToMany(Kpi::class,"obj_kpi","objective_id","kpi_id");
    }
    public function activities(){
        return $this->hasMany(Activity::class,'objective_id','id');
    }
}
