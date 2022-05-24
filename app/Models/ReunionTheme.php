<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReunionTheme extends Model
{
    use HasFactory;

    protected $table = "reunion_themes";
    public $timestamps = true;

    protected $fillable = [
        'title',
        'reunion_id',
        'status',
    ];

    public function reunion(){
        return $this->belongsTo(Reunion::class,"reunion_id","id");
    }
}
