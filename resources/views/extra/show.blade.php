@extends('adminlte::page')

@section('template_title')
    {{ $extra->name ?? 'Show Extra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Extra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('extras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Actividad:</strong>
                            {{ $extra->Fecha_Actividad }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $extra->Hora_Inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $extra->Hora_Fin }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $extra->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
