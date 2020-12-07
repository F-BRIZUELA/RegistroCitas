@extends('layouts.app')
@section('content')
<div class="container">
    {!! Form::open(['route' => 'especialidad.store']) !!}
    @include('catalogos.especialidades.fields')
    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
</div>
@endsection
