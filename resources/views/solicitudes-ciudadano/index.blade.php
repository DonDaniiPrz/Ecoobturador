@extends('layouts.app')

@section('template_title')
    Solicitudes Ciudadano
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Solicitudes Ciudadano') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('solicitudes-ciudadanos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Solicitud</th>
										<th>Fecha Inicio Solicitud</th>
										<th>Fecha Fin Solicitud</th>
										<th>Descripcion Solicitud</th>
										<th>Identificador Solicitiud</th>
										<th>Estado Solicitud</th>
										<th>Fecha Recoleccion</th>
										<th>Hora Recoleccion</th>
										<th>Users Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($solicitudesCiudadanos as $solicitudesCiudadano)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $solicitudesCiudadano->id_solicitud }}</td>
											<td>{{ $solicitudesCiudadano->fecha_inicio_solicitud }}</td>
											<td>{{ $solicitudesCiudadano->fecha_fin_solicitud }}</td>
											<td>{{ $solicitudesCiudadano->descripcion_solicitud }}</td>
											<td>{{ $solicitudesCiudadano->identificador_solicitiud }}</td>
											<td>{{ $solicitudesCiudadano->estado_solicitud }}</td>
											<td>{{ $solicitudesCiudadano->fecha_recoleccion }}</td>
											<td>{{ $solicitudesCiudadano->hora_recoleccion }}</td>
											<td>{{ $solicitudesCiudadano->users_id }}</td>

                                            <td>
                                                <form action="{{ route('solicitudes-ciudadanos.destroy',$solicitudesCiudadano->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('solicitudes-ciudadanos.show',$solicitudesCiudadano->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('solicitudes-ciudadanos.edit',$solicitudesCiudadano->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $solicitudesCiudadanos->links() !!}
            </div>
        </div>
    </div>
@endsection
