<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class CatalogosController extends Controller
{
    public function getEspecialidades(Request $request)
    {

        $rows=Especialidad::query()
        ->get();

        $data=[
            'data'=>$rows
        ];

        return response()->json($data);
    }
}
