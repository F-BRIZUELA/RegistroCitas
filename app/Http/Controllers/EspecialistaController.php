<?php

namespace App\Http\Controllers;

use App\Models\Especialista;
use Illuminate\Http\Request;

class EspecialistaController extends Controller
{
    public $rules = [
        "nombre" => ['required', 'string','max:60'],
        "apellido" => ['required', 'string'],
        "especialidades_id" => ['required', 'numeric'],
    ];

    public function index()
    {
        $especialistas = Especialista::all();
        return view('app.especialistas.index', compact("especialistas"));
    }

   
    public function add()
    {     $model=false; 

        return view('app.especialistas.add',compact("model"));
    }

   
    public function store(Request $request, Especialista $model)
    {
        $campos = $this->validate($request, $this->rules);

        $model->create($campos);

        return redirect()->route('especialista');
    }

    public function show(Especialista $Especialista)
    {
        //
    }

    public function edit(Especialista $model)
    {
        return view('app.especialistas.edit', compact('model'));
    }

    public function update(Request $request, Especialista $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        return redirect()->route('especialista');
    }

    public function destroy(Especialista $Especialista)
    {
        //
    }
}

