<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AramlFamily extends Model
{
    use HasFactory;
    public function aramls()
    {
        return $this->belongsTo(Araml::class);
    }
}
