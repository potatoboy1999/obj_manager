<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = "areas";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'status',
    ];

    public function positions(){
        return $this->hasMany(Position::class,'area_id','id');
    }

    public function reu_documents(){
        return $this->belongsToMany(Document::class,'reunion_documents','area_id','documents_id');
    }
}
