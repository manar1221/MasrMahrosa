<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Araml extends Model
{
    use HasFactory;
    public function aramlfamily()
    {
        return $this->hasMany(AramlFamily::class, 'araml_id');
    }
}
