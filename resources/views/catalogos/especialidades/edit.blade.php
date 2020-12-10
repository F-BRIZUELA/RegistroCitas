@extends('layouts.app')
@section('content')
    <div class="container">
        {!! Form::model($model,['route' => ['especiliadad.update',$model->id],'method'=>'patch']) !!}
        @include('catalogos.especialidades.fields')
        {!! Form::submit('Actualizar') !!}
        {!! Form::close() !!}
    </div>
@endsection
