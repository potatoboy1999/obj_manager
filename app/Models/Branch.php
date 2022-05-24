<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = "branches";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'status',
    ];

    public function travel_schedules(){
        return $this->hasMany(TravelSchedule::class,"branch_id","id");
    }
}
