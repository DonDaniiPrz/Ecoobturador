@extends('layouts.app')

@section('template_title')
    {{ $solicitudesCiudadano->name ?? "{{ __('Show') Solicitudes Ciudadano" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Solicitudes Ciudadano</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes-ciudadanos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Solicitud:</strong>
                            {{ $solicitudesCiudadano->id_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Solicitud:</strong>
                            {{ $solicitudesCiudadano->fecha_inicio_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Solicitud:</strong>
                            {{ $solicitudesCiudadano->fecha_fin_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Solicitud:</strong>
                            {{ $solicitudesCiudadano->descripcion_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Identificador Solicitiud:</strong>
                            {{ $solicitudesCiudadano->identificador_solicitiud }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Solicitud:</strong>
                            {{ $solicitudesCiudadano->estado_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Recoleccion:</strong>
                            {{ $solicitudesCiudadano->fecha_recoleccion }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Recoleccion:</strong>
                            {{ $solicitudesCiudadano->hora_recoleccion }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $solicitudesCiudadano->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
