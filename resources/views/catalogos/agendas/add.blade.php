@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card border-primary">
            <div class="card-body">
                <h4 class="card-title">Datos de la Agenda</h4>
                <p class="card-text">

                    {!! Form::open(['route' => 'agenda.store']) !!}
                    @include('catalogos.agendas.fields')
                    {!! Form::submit('Guardar') !!}
                    {!! Form::close() !!}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
