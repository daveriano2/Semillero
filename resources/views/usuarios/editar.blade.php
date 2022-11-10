@extends('adminlte::page')

@section('title', 'Editar Usuario')

@section('content_header')
    <h1>Editar Usuario</h1>
@stop

@section('content')
    <div class="float-right">
            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
    </div>

@if($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
     <strong>¡Revise Los Campos!</strong>
        @foreach ($errors-all() as $error)
            <span class ="badge badge-danger">{{$error}}</span>
        @endforeach
        <button type="button" class="close" data-dismiss="alerta" aria-label="close">
          <span aria-hidden="true">&times;</span>  
        </button>  
    </div>  
    @endif

    {!! Form::model($user, ['method'=>'PATCH', 'route'=>['usuarios.update', $user->id]]) !!}
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="name">Nombre</label>
            {!! Form::text('name',null, array ('class'=> 'form-control'))!!}
        </div>    
          
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="name">Email</label>
            {!! Form::text('email',null, array ('class'=> 'form-control'))!!}
            </div> 
        </div> 

        
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="name">Roles</label>
            {!! Form::select('roles[]', $roles,$userRole, array ('class'=> 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12"> 
            
            <div class="form-group">
                <button type=submit class="btn btn-primary">Guardar</button>
            </div> 
        </div> 
    </div> 
           
    {!! Form::close() !!}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop

