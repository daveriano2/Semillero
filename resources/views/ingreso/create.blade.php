@extends('adminlte::page')

@section('template_title')
    Create Ingreso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Realizar Registro de Turno</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ingresos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ingreso.form')

                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
