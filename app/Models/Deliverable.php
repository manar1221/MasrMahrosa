<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliverable extends Model
{
    use HasFactory;

    public function deliver()
    {
        return $this->belongsTo(Cases::class,'case_id');
    }
}
