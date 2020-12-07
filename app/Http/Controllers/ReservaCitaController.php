<?php

namespace App\Http\Controllers;

use App\Models\ReservaCita;
use Illuminate\Http\Request;

class ReservaCitaController extends Controller
{
    public $rules = [
        "nombre" => ['required', 'string','max:60'],
        "apellido" => ['required', 'string'],
        "num_cedula" => ['required', 'string'],
        "num_celular" => ['required', 'numeric'],
        "agendas_id" => ['required', 'numeric'],
    ];

    public function index()
    {
        $reservacitas = ReservaCita::all();
        return view('app.reservacitas.index', compact("reservacitas"));
    }

   
    public function add()
    {     $model=false; 

        return view('app.reservacitas.add',compact("model"));
    }

   
    public function store(Request $request, ReservaCita $model)
    {
        $campos = $this->validate($request, $this->rules);

        $model->create($campos);

        return redirect()->route('reservacita');
    }

    public function show(ReservaCita $reservacita)
    {
        //
    }

    public function edit(ReservaCita $model)
    {
        return view('app.reservacitas.edit', compact('model'));
    }

    public function update(Request $request, ReservaCita $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->update($campos);

        return redirect()->route('reservacitas');
    }

    public function destroy(ReservaCita $reservacita)
    {
        //
    }
}
