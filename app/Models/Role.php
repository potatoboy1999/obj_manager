<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "T_SGCV_Roles";
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion',
        'estado'
    ];

    public function themes(){
        return $this->hasMany(Theme::class,"rol_id","id");
    }
}
