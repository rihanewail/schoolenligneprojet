<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvenmentPayment extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'durre', 'date', 'lien', 'specialite', 'prix','nmbrDePlace','user_id'];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
