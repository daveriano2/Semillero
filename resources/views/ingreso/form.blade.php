<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tecnico') }}
            {{ Form::Select('id_User', $users, $ingreso->id_User, ['class' => 'form-control' . ($errors->has('id_User') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione su Usuario']) }}
            {!! $errors->first('id_User', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::Select('id_Ciudad', $ciudads, $ingreso->id_Ciudad, ['class' => 'form-control' . ($errors->has('id_Ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la Ciudad']) }}
            {!! $errors->first('id_Ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sede') }}
            {{ Form::Select('id_Sede', $sedes, $ingreso->id_Sede, ['class' => 'form-control' . ($errors->has('id_Sede') ? ' is-invalid' : ''), 'placeholder' => 'seleccione la Sede']) }}
            {!! $errors->first('id_Sede', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>