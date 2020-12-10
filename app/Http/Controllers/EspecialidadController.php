<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{  
    public $rules = [
        "especialidad" => ['required', 'string'],
    ];

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
        return view('catalogos.especialidades.edit',compact('model'));
    }

    public function store(Request $request, Especialidad $model)
    {
        //$campos=$this->validate($request,$this->rules);
        $model=Especialidad::query()->create($request->all());
        return redirect()->route('especialidad');
    }

    public function update(Especialidad $model,Request $request)
    {
        //$campos=$this->validate($request,$this->rules);
        $model->fill($request->all());
        $model->save();

        return redirect()->route('especialidad');
    }

    public function destroy(Especialidad $model)
    {
        $model->delete();
        return redirect()->route('especialidad');
    }
}
