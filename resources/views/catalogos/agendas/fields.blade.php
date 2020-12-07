<div class="row">
    <div class="col-lg-12">

        <div class="form-group">
            <label for="exampleInputEmail1">Fecha venida</label>
            {!! Form::date('fecha_venida',null,$attributes=['class' => 'form-control']) !!}
            @includeWhen(count($errors->get('fecha_venida'))>0, 'errors.message', ['errores' => $errors->get('fecha_venida')])
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Especialista</label>
           <div>
            @if ($model)
            <select-especialistas :selected="{{ $model->especialista}}" url="/api-app/especialistas" nombre="especialistas_id" label="especialista" />
            @else
            <select-especialistas url="/api-app/especialistas" nombre="especialistas_id" label="especialista" />
            @endif
           </div>
            @includeWhen(count($errors->get('especialistas_id'))>0, 'errors.message', ['errores' => $errors->get('especialistas_id')])
        </div>
    
    </div>
</div>
