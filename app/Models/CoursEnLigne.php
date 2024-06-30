<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursEnLigne extends Model
{
    use HasFactory;
    protected $fillable = ['description',
     'date',
    'duree', // D
    'specialite',
    'user_id',];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
