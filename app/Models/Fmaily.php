<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fmaily extends Model
{
    use HasFactory;

    public function deforseds()
    {
        return $this->belongsTo(Deforsed::class);
    }
}
