@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Datos de la Agenda</h4>
            </div>
            <img src="holder.js/100x180/" alt="">
            <div class="card-body">
                {!! Form::model($model, ['route' => ['agenda.update', $model->id],'method'=>'patch']) !!}
                @include('catalogos.agendas.fields')
                {!! Form::submit('Actualizar') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
