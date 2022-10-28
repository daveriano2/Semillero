
@extends('adminlte::page')

@section('title', 'Crear Usuario')

@section('content_header')
    <h1>Crear Usuario</h1>
@stop

@section('content')

@if($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
     <strong>¡Revise Los Campos!</strong>
        @foreach ($errors-all() as $error)
            <span class ="badge badge-danger">{{$error}}</span>
        @endforeach
        <button type="button" class="close" data-dismiss="alerta" aria-label="close">
          <span aria-hidden="true">$timmes;</span>  
        </button>  
    </div>  
    @endif

    {!! Form::open(array('route'=>'usuarios.store','method'=>'POST')) !!}
     
        
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Nombre</label>
                {!! Form::text('name',null, array ('class'=> 'form-control'))!!}
            </div>  
        </div>    
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="name">Email</label>
            {!! Form::text('email',null, array ('class'=> 'form-control'))!!}
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Contraseña</label>
                {!! Form::text('password',null, array ('class'=> 'form-control'))!!}
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Confirmar contraseña</label>
                {!! Form::text('confirm-password',null, array ('class'=> 'form-control'))!!}
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Roles</label>
                {!! Form::select('roles[]',$roles,[], array ('class'=> 'form-control'))!!}
            </div> 
        </div>   

        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <button type=submit class="btn btn-primary">Guardar</button>
            </div> 
        </div> 
    <div> 
           
    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop