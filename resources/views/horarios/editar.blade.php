@extends('adminlte::page')

@section('title', 'Editar Horarios')

@section('content_header')
    <h1>Editar Horarios</h1>
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
    <div class="float-right">
            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Volver</a>
    </div>
    {!! Form::model($horario, ['method'=>'PATCH', 'route'=>['horarios.update', $horario->id]]) !!}
       
          
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="Nombre">Hoara Inicio</label>
                {!! Form::time('Nombre',null, array ('class'=> 'form-control'))!!}
            </div>  
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="Nombre">Hora Fin</label>
                {!! Form::time('Nombre',null, array ('class'=> 'form-control'))!!}
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