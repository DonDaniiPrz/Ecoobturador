@extends('layouts.app')

@section('template_title')
    Recolectore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recolectore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recolectores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Recolector</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Cc Identificacion</th>
										<th>Recicladoras Id Recicladora</th>
										<th>Rutas Id Ruta</th>
										<th>Localidades Id Localidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recolectores as $recolectore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recolectore->id_recolector }}</td>
											<td>{{ $recolectore->nombres }}</td>
											<td>{{ $recolectore->apellidos }}</td>
											<td>{{ $recolectore->cc_identificacion }}</td>
											<td>{{ $recolectore->recicladoras_Id_recicladora }}</td>
											<td>{{ $recolectore->rutas_id_ruta }}</td>
											<td>{{ $recolectore->localidades_id_localidad }}</td>

                                            <td>
                                                <form action="{{ route('recolectores.destroy',$recolectore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recolectores.show',$recolectore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recolectores.edit',$recolectore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recolectores->links() !!}
            </div>
        </div>
    </div>
@endsection
