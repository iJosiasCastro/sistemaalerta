<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_y_apellido', 'dni', 'localidad', 'domicilio',
        'telefono', 'detalles', 'area_id'];

    public function enfermeros(){
        return $this->belongsToMany(Enfermero::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function llamados(){
        return $this->hasMany(Llamado::class);
    }
}
