<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReunionPresenter extends Model
{
    use HasFactory;

    protected $table = "reunion_presenters";
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'reunion_id',
        'status',
    ];

    public function user(){
        return $this->belongsTo(Users::class,"user_id","id");
    }

    public function reunion(){
        return $this->belongsTo(Reunion::class,"reunion_id","id");
    }
}
