<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deforsed extends Model
{
    use HasFactory;

    public function fmaily()
    {
        return $this->hasMany(Fmaily::class, 'deforsed_id');
    }
}
