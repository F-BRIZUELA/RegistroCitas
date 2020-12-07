<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    //Definiendo la tabla del modelo
    protected $table = 'agendas';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "fecha_venida",
        "especialistas_id",
    ];

    public function agendas()
    {
        return $this->hasOne(
            Especialista::class,
            'id',
            'especialistas_id'
        );
    }
}
