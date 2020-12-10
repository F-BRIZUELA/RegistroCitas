<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Especialidad;
use App\Models\Especialista;
use App\Models\ReservaCita;
use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function especialidades(Request $request)
    {
        $rows = Especialidad::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('especialidad', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function especialistas(Request $request)
    {
        $rows = Especialista::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('especialista', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function agendas(Request $request)
    {
        $rows = Agenda::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('agenda', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

    public function reservacitas(Request $request)
    {
        $rows = ReservaCita::query()
            ->when($request->buscar, function ($query) use ($request) {
                $buscar = "%" . $request->buscar . "%";
                $query->where('reservacita', 'ilike', $buscar);
            })
            ->get();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }

   /* public function sexos()
    {
        $rows = Sexo::all();
        $data = [
            'data' => $rows
        ];
        return response()->json($data, 200);
    }*/
}
