@extends('adminlte::page')

@section('title', 'Turnos')

@section('content_header')
    <h1>Turnos Soporte</h1>
@stop

@section('content')
@can('Administrador')
        <a class = "btn btn-warning" href="{{route('turnos.create')}}">Crear Turnos</a>
    @endcan


    <table class="table table-bordered border-primary">
  <thead style="background-color: #6777ef;">
    
      
      <th style="color: #fff;">Empleado</th>
      <th style="color: #fff;">Ciudad</th>
      <th style="color: #fff;">Sede</th>
      <th style="color: #fff;">Fecha Inicio</th>
      <th style="color: #fff;">Fecha FIn </th>
      <th style="color: #fff;">Hora inicio</th>
      <th style="color: #fff;">Hora Fin</th>      
      <th style="color: #fff;">Celular</th>
      @can('Administrador')
      <th style="color: #fff;">Accion</th>
      @endcan
      <tbody>
       @foreach($turnos as $turno)
        <tr>
        <td>{{$turno->Users->name }}</td>
        <td>{{$turno->Ciudads->Nombre }}</td>
        <td>{{$turno->Sedes->Nombre}}</td>
        <td>{{$turno->Fecha_Inicio}}</td>
        <td>{{$turno->Fecha_Final}}</td>
        <td>{{$turno->Horarios->Hora_Inicio}}</td>
        <td>{{$turno->Horarios->Hora_Fin}}</td>
        <td>{{$turno->Celular}}</td>
        
            @can('Administrador')
            <td>
                   
                <a class = "btn btn-primary" href="{{route('turnos.edit',$turno->id)}}">Editar sede</a>
                 
                {!! Form::open(['method' => 'DELETE', 'route'=>['turnos.destroy', $turno->id], 'style'=>'display:inline']) !!}
                        {!! Form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
                {!! Form::close() !!}
                   

            </td>
            @endcan
            </tr>
        @endforeach  
        
    </tbody>
        
    </thead>
    </table>



@stop


@section('css')
    
    
@stop

@section('js')
   
@stop