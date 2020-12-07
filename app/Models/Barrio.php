<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'barrios';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'barrio',
         'municipio_id',
         'rural'
        ];
}
