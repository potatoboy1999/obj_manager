<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "comments";
    public $timestamps = true;

    protected $fillable = [
        'description',
        'activities_id',
        'users_id',
        'status',
    ];

    public function user(){
        return $this->belongsTo(User::class,"users_id","id");
    }

    public function activity(){
        return $this->belongsTo(Activity::class,"activities_id","id");
    }
}
