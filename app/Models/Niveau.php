<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "des_niveau",
        "gestion_droits_id",
    ];

    public function Gestion_droits(){
        return $this->belongsTo(GestionDroit::class);
    }
}
