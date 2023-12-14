@extends('layouts.app')

@section('template_title')
    {{ $recicladora->name ?? "{{ __('Show') Recicladora" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recicladora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recicladoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Recicladora:</strong>
                            {{ $recicladora->Id_recicladora }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Recicladora:</strong>
                            {{ $recicladora->Nombre_recicladora }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $recicladora->Razon_social }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $recicladora->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $recicladora->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Users Id:</strong>
                            {{ $recicladora->users_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
