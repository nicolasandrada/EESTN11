<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ensena extends Model
{
    use HasFactory;

    public function docente()
    {
        return $this->belongsTo(Docente::class, 'docente_id');
    }
}
