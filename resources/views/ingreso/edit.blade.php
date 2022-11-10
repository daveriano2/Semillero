@extends('adminlte::page')

@section('template_title')
    Update Ingreso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Exditar</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ingresos.update', $ingreso->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ingreso.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
