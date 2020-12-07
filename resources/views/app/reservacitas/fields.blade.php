<div class="row">
    <div class="col-lg-6">

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombre',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('nombre'))>0, 'errors.message', ['errores' => $errors->get('nombre')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Numero de cedula</label>
            {!! Form::text('num_cedula',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('num_cedula'))>0, 'errors.message', ['errores' => $errors->get('num_cedula')])
        </div>
    </div>

    <div class="col-lg-6">
         <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            {!! Form::text('apellido',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('apellido'))>0, 'errors.message', ['errores' => $errors->get('apellido')])
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Numero de Celular</label>
            {!! Form::text('num_celular',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('num_celular'))>0, 'errors.message', ['errores' => $errors->get('num_celular')])
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Fechas disponibles</label>
           <div>
            @if ($model)
            <select-agendas :selected="{{ $model->agenda }}" url="/api-app/agendas" nombre="agendas_id" label="agendas" />
            @else
            <select-agendas  url="/api-app/agendas " nombre="agendas_id" label="agenda" />
            @endif
           </div>
            @includeWhen(count($errors->get('agendas_id'))>0, 'errors.message', ['errores' => $errors->get('agendas_id')])
        </div>
    </div>
</div>   