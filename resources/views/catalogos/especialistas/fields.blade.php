<div class="row">
    <div class="col-lg-12">

        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            {!! Form::text('nombre',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('nombre'))>0, 'errors.message', ['errores' => $errors->get('nombre')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            {!! Form::text('apellido',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('apellido'))>0, 'errors.message', ['errores' => $errors->get('apellido')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Especialidad</label>
           <div>
            @if ($model)
            <select-especialidades :selected="{{ $model->especialidad}}" url="/api-app/especialidades" nombre="especialidades_id" label="especialidad" />
            @else
            <select-especialidades url="/api-app/especialidades" nombre="especialidades_id" label="especialidad" />
            @endif
           </div>
            @includeWhen(count($errors->get('especialidades_id'))>0, 'errors.message', ['errores' => $errors->get('especialidades_id')])
        </div>
    
    </div>
</div>