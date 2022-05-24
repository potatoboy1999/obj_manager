<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReunionDocument extends Model
{
    use HasFactory;

    protected $table = "reunion_document";
    public $timestamps = true;

    protected $fillable = [
        'area_id',
        'reunion_id',
        'documents_id',
        'status',
    ];

    public function area(){
        return $this->belongsTo(User::class,"area_id","id");
    }

    public function reunion(){
        return $this->belongsTo(Reunion::class,"reunion_id","id");
    }

    public function document(){
        return $this->belongsTo(Document::class,"documents_id","id");
    }
}
