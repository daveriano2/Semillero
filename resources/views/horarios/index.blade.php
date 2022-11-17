    @extends('adminlte::page')

    @section('title', 'Horarios')

    @section('content_header')
        <h1>Horarios</h1>
    @stop

    @section('content')
        @can('crear-rol')
            <a class = "btn btn-warning" href="{{route('horarios.create')}}">Crear horarios</a>
        @endcan
        <div class="float-right">
            <a class="btn btn-primary" href="{{ route('dash') }}"> Volver</a>
        </div>

    <table class="table table-bordered border-primary">
    <thead style="background-color: #6777ef;">
        
        
        <th style="color: #fff;">Hora Inicio</th>
        <th style="color: #fff;">Hora Fin</th>
        <th style="color: #fff;">Acciones</th>
        <tbody>
        @foreach($horarios as $horario)
            <tr>
            <td>{{$horario->Hora_Inicio}}</td>
            <td>{{$horario->Hora_Fin}}</td>
                
                <td>
                        @can('editar-rol')
                        <a class = "btn btn-primary" href="{{route('horarios.edit',$horario->id)}}">Editar sede</a>
                        @endcan
                        @can('borrar-rol')
                            {!! Form::open(['method' => 'DELETE', 'route'=>['horarios.destroy', $horario->id], 'style'=>'display:inline']) !!}
                                    {!! Form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
                            {!! Form::close() !!}
                        @endcan

                </td>
                </tr>
            @endforeach  
            
        </tbody>
            
        </thead>
        </table>
        {!! $horarios->links() !!}
        @stop