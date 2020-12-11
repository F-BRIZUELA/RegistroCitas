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
            <select-combustibles 
            url="/api-app/especialidad" 
            nombre="especialidades_id" 
            label="especialidad" />
        </div>
</div>
