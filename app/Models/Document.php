<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = "documents";
    public $timestamps = true;

    protected $fillable = [
        'name',
        'status',
    ];

    public function activities(){
        return $this->hasMany(Activity::class,"document_id","id");
    }

    public function reu_documents(){
        return $this->hasMany(ReunionDocument::class,"documents_id","id");
    }
}
