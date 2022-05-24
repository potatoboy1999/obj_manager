<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelSchedule extends Model
{
    use HasFactory;

    protected $table = "travel_schedule";
    public $timestamps = true;

    protected $fillable = [
        'users_id',
        'branch_id',
        'travel_start',
        'travel_end',
        'status',
        'vehicle',
        'hotel',
        'travel_pay',
        'validation_one',
        'validation_two',
    ];

    public function user(){
        return $this->belongsTo(User::class,"users_id","id");
    }

    public function branch(){
        return $this->belongsTo(Branch::class,"branch_id","id");
    }

}
