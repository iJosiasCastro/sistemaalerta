<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermero extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_y_apellido', 'dni', 'telefono', 'detalles'];
    // public $timestamps = false;

    public function pacientes(){
        return $this->belongsToMany(Paciente::class);
    }
}
