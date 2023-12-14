@extends('layouts.app')

@section('template_title')
    {{ $ruta->name ?? "{{ __('Show') Ruta" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ruta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rutas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ruta:</strong>
                            {{ $ruta->id_ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Ruta:</strong>
                            {{ $ruta->descripcion_ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Horario Ruta:</strong>
                            {{ $ruta->horario_ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ruta:</strong>
                            {{ $ruta->fecha_ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta Realizada:</strong>
                            {{ $ruta->Ruta_realizada }}
                        </div>
                        <div class="form-group">
                            <strong>Recicladoras Id Recicladora:</strong>
                            {{ $ruta->recicladoras_Id_recicladora }}
                        </div>
                        <div class="form-group">
                            <strong>Barrios Id Barrio:</strong>
                            {{ $ruta->barrios_id_barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Solicitudes Ciudadanos Id Solicitud:</strong>
                            {{ $ruta->solicitudes_ciudadanos_id_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Solicitudes Empresas Id Solicitud:</strong>
                            {{ $ruta->solicitudes_empresas_id_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo Cancelacion:</strong>
                            {{ $ruta->Motivo_cancelacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
