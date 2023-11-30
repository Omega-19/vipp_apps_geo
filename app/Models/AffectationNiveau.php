<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffectationNiveau extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "niveau_id",
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function niveau()
    {
        return $this->belongsToMany(Niveau::class);
    }
}
