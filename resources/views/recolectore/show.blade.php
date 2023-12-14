@extends('layouts.app')

@section('template_title')
    {{ $recolectore->name ?? "{{ __('Show') Recolectore" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recolectore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recolectores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Recolector:</strong>
                            {{ $recolectore->id_recolector }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $recolectore->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $recolectore->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Cc Identificacion:</strong>
                            {{ $recolectore->cc_identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Recicladoras Id Recicladora:</strong>
                            {{ $recolectore->recicladoras_Id_recicladora }}
                        </div>
                        <div class="form-group">
                            <strong>Rutas Id Ruta:</strong>
                            {{ $recolectore->rutas_id_ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Localidades Id Localidad:</strong>
                            {{ $recolectore->localidades_id_localidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
