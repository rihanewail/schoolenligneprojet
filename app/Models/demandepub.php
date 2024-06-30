<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandepub extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'email',
        'speciality',
        'redaction',
        // 'image',
    ];
}
