<div class="row">
    <div class="col-lg-12">

        <div class="form-group">
            <label for="exampleInputEmail1">Especialidad</label>
            {!! Form::text('especialidad',null,$attributes=['class' => 'form-control']) !!}

            @includeWhen(count($errors->get('especialidad'))>0, 'errors.message', ['errores' => $errors->get('especialidad')])
        </div>
    </div>
</div>