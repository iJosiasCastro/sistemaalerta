<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamado extends Model
{
    use HasFactory;
    protected $fillable = ['area_id', 'paciente_id', 'atendido', 'tipo'];

    public function area(){
        return $this->belongsTo(Area::class);
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
