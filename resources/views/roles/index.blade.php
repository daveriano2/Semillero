@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>KONECTA</h1>
@stop

@section('content')
    <div class="float-right">
            <a class="btn btn-primary" href="{{ route('dash') }}"> Volver</a>
    </div>
@can('crear-rol')
        <a class = "btn btn-warning" href="{{route('roles.create')}}">Crear Rol</a>
    @endcan


    <table class="table table-bordered border-primary">
  <thead style="background-color: #6777ef;">
    
      <th style="display: none;">ID</th>
      <th style="color: #fff;">Rol</th>
      <th style="color: #fff;">Acciones</th>
      <tbody>
       @foreach($roles as $role)
        <tr>
        <td>{{$role->name}}</td>
            
            <td>
                    @can('editar-rol')
                    <a class = "btn btn-primary" href="{{route('roles.edit',$role->id)}}">Editar Rol</a>
                    @endcan
                    @can('borrar-rol')
                        {!! Form::open(['method' => 'DELETE', 'route'=>['roles.destroy', $role->id], 'style'=>'display:inline']) !!}
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
    <script> console.log('Hi!'); </script>
@stop