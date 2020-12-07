<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    //Definiendo la tabla del modelo
    protected $table = 'colores';

    //Definiendo los campos de la tabla
    protected $fillable = ['color'];
    
}
