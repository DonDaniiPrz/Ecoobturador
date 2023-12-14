@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? "{{ __('Show') User" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Username:</strong>
                            {{ $user->username }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $user->image }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $user->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Role:</strong>
                            {{ $user->role }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $user->status }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $user->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
