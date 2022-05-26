<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = "T_SGCV_Actividades";
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'objetivo_id',
        'fecha_comienzo',
        'fecha_fin',
        'preced_politicas',
        'documento_id',
        'estado',
    ];

    public function comments(){
        return $this->hasMany(Comment::class, "actividad_id", "id");
    }
    
    public function objective(){
        return $this->belongsTo(Objective::class, "objetivo_id", "id");
    }

    public function document(){
        return $this->belongsTo(Document::class, "documento_id", "id");
    }
}
