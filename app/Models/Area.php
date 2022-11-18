<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['numero_de_area', 'descripcion'];

    public function llamados(){
        return $this->hasMany(Llamado::class);
    }
}
