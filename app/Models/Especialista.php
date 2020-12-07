<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialista extends Model
{
    use HasFactory;
    //Definiendo la tabla del modelo
    protected $table = 'especialistas';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "nombre",
        "apellido",
        "especialidades_id",
    ];
    
    public function getFullNameAttribute()
    {
        return $this->nombre . '  ' . $this->apellido;
    }

    public function especialidad()
    {
        return $this->hasOne(
            Especialidad::class,
            'id',
            'especialidades_id'
        );
    }
}
