@extends('layouts.app')
@section('content')
<a href="{!! route('especialidad.add') !!}" class="btn btn-link">
    <i class="fas fa-plus-circle    "></i> 
    Agregar
</a>
<div class="table-responsive">
    <table class="table table-sm">
        <thead class="thead-dark">
            <tr role="rowheader">
                <th width="100">ID
                <th>Especialidad</th>
                <th width="100"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rows as $row)
            <tr>
                <td>{{ $row->id  }}</td>
                <td>{{ $row->especialidad  }}</td>
                <td>
                    <div class="btn-group-sm">
                        {!! Form::open(['route' => ['especialidad.delete',$row->id],'method' => 'delete']) !!}
                        {!! Form::token() !!}
                        <button type="submit" class="btn btn-danger btn-sm">
                            Eliminar
                        </button>
                        {!! Form::close() !!}
                        <a href="{{ route('especialidad.edit',$row->id) }}" class="btn btn-danger btn-sm">
                            Editar
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection