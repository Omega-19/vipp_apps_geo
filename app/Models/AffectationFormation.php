<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffectationFormation extends Model
{
    use HasFactory;

    protected $fillable = [
        "formation_id",
        "niveau_id",
    ];

    public function formation()
    {
        return $this->belongsToMany(Formation::class);
    }

    public function niveau()
    {
        return $this->belongsToMany(Niveau::class);
    }
}
