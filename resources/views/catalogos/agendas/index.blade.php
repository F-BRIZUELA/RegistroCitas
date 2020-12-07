@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Agendas</h4>    
  </div>
 
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <a href="{!! route('agenda.add') !!}">
                Agregar</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecga venida</th>
                <th>Especialistas</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendas as $agenda)
            <tr>
                <td scope="row">{{ $agenda->id }} </td>
                <td>{{ $agenda->fecha_venida->fecha_venida }} </td>
                <td>{{ $agenda->especialistas->especialistas}} </td>
                <td>
                    <a href="{!! route('agenda.edit',$agenda->id) !!} ">
                        <i class="fas fa-pen-alt"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection
