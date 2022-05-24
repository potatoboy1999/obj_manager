<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $table = "themes";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'status',
        'roles_id',
    ];

    public function role(){
        return $this->belongsTo(Role::class,'roles_id','id');
    }

    public function objectives(){
        return $this->hasMany(Objective::class,'themes_id','id');
    }
}
