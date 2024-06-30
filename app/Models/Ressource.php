<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'specialite',
        'nbrSingl',
        'user_id',
        'ressourc',

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
