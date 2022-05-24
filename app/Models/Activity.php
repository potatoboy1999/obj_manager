<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = "activities";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'objective_id',
        'date_start',
        'date_end',
        'proced_politics',
        'document_id',
        'status',
    ];

    public function objective(){
        return $this->belongsTo(Objective::class, "objective_id", "id");
    }

    public function comments(){
        return $this->hasMany(Comment::class, "activities_id", "id");
    }

    public function document(){
        return $this->belongsTo(Document::class, "document_id", "id");
    }
}
