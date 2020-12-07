<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index(Request $request)
    {
        $rows = Especialidad::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.especialidades.index', compact('rows'));
    }

    public function add()
    {
        return view('catalogos.especialidades.add');
    }

    public function show(Especialidad $model)
    {
        return view('catalogos.combustible.edit', compact('model'));
    }

    public function store(Request $request)
    {
        $model = new Especialidad();

        $model->especialidad = $request->especialidad;

        $model->save();

        return redirect()->route('especialidad');
    }

    public function update(Especialidad $model, Request $request)
    {
        $model->especialidad = $request->especialidad;

        $model->save();

        return redirect()->route('especialidad');
    }

    public function destroy(Especialidad $model)
    {
        $model->delete();
        return redirect()->route('especialidad');
    }
}
