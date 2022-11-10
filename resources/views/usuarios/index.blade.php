
@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Empleados</h1>
@stop

@section('content')
    <div class="float-right">
            <a class="btn btn-primary" href="{{ route('dash') }}"> Volver</a>
    </div>

<a class="btn btn-primary" href="{{route('usuarios.create')}}" role="button">Crear empleado</a>
<table class="table table-bordered border-primary">
  <thead style="background-color: #6777ef;">
    
      <th style="display: none;">ID</th>
      <th style="color: #fff;">Nombre</th>
      <th style="color: #fff;">Email</th>
      <th style="color: #fff;">Cargo</th>
      <th style="color: #fff;">Accion</th>
    
  </thead>
  <tbody>
       @foreach($usuarios as $usuario)
       <tr>
       <td style="display: none;">{{$usuario->id}}</td>
       <td>{{$usuario->name}}</td>
       <td>{{$usuario->email}}</td>
       <td>
       @if(!empty($usuario->getRoleNames()))
          @foreach($usuario->getRoleNames() as $rolName)
           <h5><span class ="badge badge-dark"{{$rolName}}></span></h5>
          @endforeach
         @endif 
       </td>
       

     
       <td>
       
         <a class="btn btn-primary" href="{{route('usuarios.edit', $usuario->id)}}" role="button">editar</a>
          
         {!! Form::open(['method' => 'DELETE', 'route'=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
         {!! Form::close() !!}

       </td>
       
       </tr>
       @endforeach
  </tbody>
</table>
<div class="pagination justify-content-end">
  {!! $usuarios->links()!!}
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop