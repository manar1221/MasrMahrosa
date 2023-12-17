<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aytam extends Model
{
    use HasFactory;
    public function aytamfamily()
    {
        return $this->hasMany(AytamFamily::class, 'aytam_id');
    }
}
