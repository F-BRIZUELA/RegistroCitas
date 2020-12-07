<?php

namespace App\Http\Controllers;

use App\Models\Barrio;
use Illuminate\Http\Request;

class BarrioController extends Controller
{
    public function store(Request $request)
    {       

        $model = new Barrio;

        $model->name = $request->barrio;
        $model->municipio_id = $request->municipio_id;
        $model->rural = $request->rural;

        $model->save();
    }
}
