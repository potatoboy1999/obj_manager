<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    use HasFactory;
    
    protected $table = "reunions";
    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'date',
        'status',
    ];

    public function reunionThemes(){
        return $this->hasMany(ReunionTheme::class,"reunion_id","id");
    }

    public function reunionDocuments(){
        return $this->hasMany(ReunionDocument::class,"reunion");
    }

    public function reunionPresenters(){
        return $this->hasMany(ReunionPresenter::class,"reunion_id","id");
    }

    public function users(){
        return $this->belongsToMany(User::class,"reunion_presenters","reunion_id","user_id");
    }

    public function documents(){
        return $this->belongsToMany(Documents::class,"reunion_document","reunion_id","documents_id");
    }
}
