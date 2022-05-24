<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = "positions";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'area_id',
        'status',
    ];

    public function area(){
        return $this->belongsTo(Area::class,'area_id','id');
    }

    public function users(){
        return $this->hasMany(Users::class,'positions_id','id');
    }
}
