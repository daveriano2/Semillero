@extends('adminlte::page')

@section('title', 'Crear Roles')

@section('content_header')
    <h1>Crear Roles</h1>
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

    {!! Form::open(array('route'=>'roles.store','method'=>'POST')) !!}
     
        
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name">Nombre del Rol</label>
                {!! Form::text('name',null, array ('class'=> 'form-control'))!!}
            </div>  
        </div>    
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="">Permisos Para este Rol</label>
            <br/>
            @foreach($permission as $value)

            <label>{{ Form::checkbox('$permission[]', $value->id, false,array ('class'=> 'name'))}} 
                {{$value->name}}</label>
                <br/>
            @endforeach
            </div> 
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <button type=submit class="btn btn-primary">Guardar</button>
            </div> 
        </div> 
        {!! Form::close() !!}
    </div>   
           
    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop