@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Lista Reserva de Citas</h4>    
  </div>
 
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <a href="{!! route('reservacita.add') !!}">
                Agregar</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Turno</th>
                <th>Nombre</th>
                <th>Numero de Cedula</th>
                <th>Celular</th>
                <th>Fechas disponibles del mes</th> 
            </tr>
        </thead>
        <tbody>
            @foreach ($reservacitas as $reservacita)
            <tr>
                <td scope="row">{{ $reservacita->id }} </td>
                <td>{{ $reservacita->full_name }} </td>
                <td>{{ $reservacita->num_cedula->num_cedula }} </td>
                <td>{{ $reservacita->num_celular->num_celular }} </td>
                <td>{{ $reservacita->agenda->agenda }} </td>
                <td>
                    <a href="{!! route('reservacita.edit',$reservacita->id) !!} ">
                        <i class="fas fa-pen-alt    "></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
