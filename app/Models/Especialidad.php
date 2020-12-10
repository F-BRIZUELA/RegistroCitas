<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

       //Definiendo la tabla del modelo
       protected $table = 'especialidades';

       //Definiendo los campos de la tabla
       protected $fillable = ['especialidad'];

        public $timestamps=false;
}

