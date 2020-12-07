@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <div class="card border-primary">
            <div class="card-body">
                <h4 class="card-title">Datos para la Reserva</h4>
                <p class="card-text">

                    {!! Form::open(['route' => 'reservacita.store']) !!}
                    @include('app.reservacitas.fields')
                    {!! Form::submit('Guardar') !!}
                    {!! Form::close() !!}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
