<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AytamFamily extends Model
{
    use HasFactory;
    public function aytams()
    {
        return $this->belongsTo(Aytam::class);
    }
}
