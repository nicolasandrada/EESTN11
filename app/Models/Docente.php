<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'cuil',
        'fecha_nacimiento',
        'foto',
    ];


    public function ensena()
    {
        return $this->hasMany(Ensena::class);
    }
}
