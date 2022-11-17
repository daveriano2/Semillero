<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha_Actividad') }}
            {{ Form::text('Fecha_Actividad', $extra->Fecha_Actividad, ['class' => 'form-control' . ($errors->has('Fecha_Actividad') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Actividad']) }}
            {!! $errors->first('Fecha_Actividad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_Inicio') }}
            {{ Form::text('Hora_Inicio', $extra->Hora_Inicio, ['class' => 'form-control' . ($errors->has('Hora_Inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('Hora_Inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora_Fin') }}
            {{ Form::text('Hora_Fin', $extra->Hora_Fin, ['class' => 'form-control' . ($errors->has('Hora_Fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('Hora_Fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::select('Estado', $extra->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>