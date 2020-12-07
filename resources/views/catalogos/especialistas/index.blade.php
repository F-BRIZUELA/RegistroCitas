@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Lista Especialistas</h4>    
  </div>
 
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <a href="{!! route('especialista.add') !!}">
                Agregar</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Especialidad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($especialistas as $especialista)
            <tr>
                <td scope="row">{{ $especialista->id }} </td>
                <td>{{ $especialista->full_name }} </td>
                <td>{{ $especialista->especialidad->especialidad}} </td>
                <td>
                    <a href="{!! route('especialista.edit',$especialista->id) !!} ">
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
