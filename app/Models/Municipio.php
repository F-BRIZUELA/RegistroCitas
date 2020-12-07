<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'municipios';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'municipio',
         'departamento_id'
        ];
}
