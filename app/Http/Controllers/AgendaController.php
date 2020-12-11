<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public $rules = [
        "fecha_venida" => ['required', 'date'],
        "especialistas_id" => ['required', 'numeric'],
    ];

    public function index()
    {
        $agendas = Agenda::all();
        return view('catalogos.agendas.index', compact("agendas"));
    }

   
    public function add()
    {     $model=false; 

        return view('catalogos.agendas.add',compact("model"));
    }

   
    public function store(Request $request, Agenda $model)
    {
        $campos = $this->validate($request, $this->rules);

        $model->create($campos);

        return redirect()->route('agenda');
    }

    public function show(Agenda $Agenda)
    {
        //
    }

    public function edit(Agenda $model)
    {
        return view('catalogos.agendas.edit', compact('model'));
    }

    public function update(Request $request, Agenda $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        return redirect()->route('agenda');
    }

    public function destroy(Agenda $Agenda)
    {
        //
    }
}

