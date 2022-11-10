@extends('adminlte::page')

@section('title', 'Sedes')

@section('content_header')
    <h1>KONECTA</h1>
@stop

@section('content')
    <div class="float-right">
            <a class="btn btn-primary" href="{{ route('dash') }}"> Volver</a>
    </div>
@can('crear-rol')
        <a class = "btn btn-warning" href="{{route('sedes.create')}}">Crear sede</a>
@endcan


<table class="table table-bordered border-primary">
  <thead style="background-color: #6777ef;">
    
      
      <th style="color: #fff;">Sede</th>
      <th style="color: #fff;">Acciones</th>
      <tbody>
       @foreach($sedes as $sede)
        <tr>
        <td>{{$sede->Nombre}}</td>
            
            <td>
                    @can('editar-rol')
                    <a class = "btn btn-primary" href="{{route('sedes.edit',$sede->id)}}">Editar sede</a>
                    @endcan
                    @can('borrar-rol')
                        {!! Form::open(['method' => 'DELETE', 'route'=>['sedes.destroy', $sede->id], 'style'=>'display:inline']) !!}
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