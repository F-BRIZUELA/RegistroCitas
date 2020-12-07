<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaCita extends Model
{
    use HasFactory;
    //Definiendo la tabla del modelo
    protected $table = 'reservacitas';

    //Definiendo los campos de la tabla
    protected $fillable = [
        "nombre",
        "apellido",
        "num_cedula",
        "num_celular",
        "agendas_id",
    ];

                    //FullName => full_name
    public function getFullNameAttribute()
    {
        return $this->nombres . '  ' . $this->apellido;
    }

    public function cooperativa()
    {
        return $this->hasOne(
            Cooperativa::class,
            'id',
            'cooperativa_id'
        );
    }
}
