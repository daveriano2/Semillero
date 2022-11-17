@extends('adminlte::page')

@section('template_title')
    Extra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Extra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('extras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha Actividad</th>
										<th>Hora Inicio</th>
										<th>Hora Fin</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($extras as $extra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $extra->Fecha_Actividad }}</td>
											<td>{{ $extra->Hora_Inicio }}</td>
											<td>{{ $extra->Hora_Fin }}</td>
											<td>{{ $extra->Estado }}</td>

                                            <td>
                                                <form action="{{ route('extras.destroy',$extra->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('extras.show',$extra->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('extras.edit',$extra->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $extras->links() !!}
            </div>
        </div>
    </div>
@endsection
