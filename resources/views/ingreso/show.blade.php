@extends('adminlte::page')

@section('template_title')
    {{ $ingreso->name ?? 'Show Ingreso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tecnico:</strong>
                            {{ $ingreso->Users->name }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $ingreso->Ciudads->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Sede:</strong>
                            {{ $ingreso->Sedes->Nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
