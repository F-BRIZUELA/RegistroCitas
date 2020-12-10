@extends('layouts.app')

@section('content')
<div class="jumbotron">
    {!! Form::open(['route' => 'listas']) !!}

    <div class="form-group">
        <label for="exampleInputEmail1">Especialidades</label>
        <select-especialidades
        url="/api-app/especialidades" 
        nombre="especialidades_id" 
        label="especialidades" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Especialistas</label>
        <select-especialistas 
        url="/api-app/especialistas" 
        nombre="especialistas_id" 
        label="espcialistas" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Sexo</label>
        <select-combustibles 
        url="/api-app/cooperativas" 
        nombre="cooperativa_id" 
        label="cooperativa" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">BArrios</label>
        <select-combustibles 
        url="/api-app/barrios" 
        nombre="barrio_id" 
        label="barrio" />
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">BArrios</label>
        <select-combustibles 
        url="/api-app/etnias" 
        nombre="etnia_id" 
        label="etnia" />
    </div>


    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}

</div>
@endsection
