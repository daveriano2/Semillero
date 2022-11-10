@extends('adminlte::page')


@section('title', 'Crear Turno')

@section('content_header')
    <h1>Crear Turno </h1>
@stop

@section('content')

@if($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
     <strong>¡Revise Los Campos!</strong>
        @foreach ($errors->all() as $error)
            <span class ="badge badge-danger">{{$error}}</span>
        @endforeach
        <button type="button" class="close" data-dismiss="alerta" aria-label="close">
          <span aria-hidden="true">&times;</span>  
        </button>  
    </div>  
    @endif

    @includeif('partials.errors')
    {!! Form::open(array('route'=>'turnos.store','method'=>'POST')) !!}
     
        
    <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
            {{ Form::label('Tecnico') }}
            {{ Form::select('id_User', $users, $turno->id_User, ['class' => 'form-control' . ($errors->has('id_User') ? ' is-invalid' : ''), 'placeholder' => 'Tecnico']) }}
            {!! $errors->first('id_User', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div>  
        
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
            {{ Form::label('id_Ciudad') }}
            {{ Form::Select('id_Ciudad', $ciudads, $turno->id_Ciudad, ['class' => 'form-control' . ($errors->has('id_Ciudad') ? ' is-invalid' : ''), 'placeholder' => ' Ciudad']) }}
            {!! $errors->first('id_Ciudad', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div> 
        
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
            {{ Form::label('id_Sede') }}
            {{ Form::Select('id_Sede',$sedes, $turno->id_Sede, ['class' => 'form-control' . ($errors->has('id_Sede') ? ' is-invalid' : ''), 'placeholder' => 'Id Sede']) }}
            {!! $errors->first('id_Sede', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            {{ Form::label('id_Horario') }}
            {{ Form::Select('id_Horario',$horarios, $turno->id_Horario, ['class' => 'form-control' . ($errors->has('id_Horario') ? ' is-invalid' : ''), 'placeholder' => 'Id Horario']) }}
            {!! $errors->first('id_Horario', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            {{ Form::label('Fecha_Inicio') }}
            {{ Form::date('Fecha_Inicio', $turno->Fecha_Inicio, ['class' => 'form-control' . ($errors->has('Fecha_Inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
            {!! $errors->first('Fecha_Inicio', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
            {{ Form::label('Fecha_Final') }}
            {{ Form::date('Fecha_Final', $turno->Fecha_Final, ['class' => 'form-control' . ($errors->has('Fecha_Final') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Final']) }}
            {!! $errors->first('Fecha_Final', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $turno->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <button type=submit class="btn btn-primary">Guardar</button>
            </div> 
        </div> 
        
    </div>   
           
    {!! Form::close() !!}
    @csrf
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop