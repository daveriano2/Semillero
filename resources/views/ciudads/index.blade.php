@extends('adminlte::page')

@section('title', 'Ciudad')

@section('content_header')
    <h1>Ciudad</h1>
@stop

@section('content')
@can('crear-rol')
        <a class = "btn btn-warning" href="{{route('ciudads.create')}}">Crear Ciudad</a>
    @endcan


    <table class="table table-bordered border-primary">
  <thead style="background-color: #6777ef;">
    
      
      <th style="color: #fff;">Ciudad</th>
      <th style="color: #fff;">Acciones</th>
      <tbody>
       @foreach($ciudads as $ciudad)
        <tr>
        <td>{{$ciudad->Nombre}}</td>
            
            <td>
                    @can('editar-rol')
                    <a class = "btn btn-primary" href="{{route('ciudads.edit',$ciudad->id)}}">Editar Ciudad</a>
                    @endcan
                    @can('borrar-rol')
                        {!! Form::open(['method' => 'DELETE', 'route'=>['ciudads.destroy', $ciudad->id], 'style'=>'display:inline']) !!}
                                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
                        {!! Form::close() !!}
                    @endcan

            </td>
            </tr>
        @endforeach  
        
    </tbody>
        
    </thead>
    </table>



@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
@stop

@section('js')
   
@stop