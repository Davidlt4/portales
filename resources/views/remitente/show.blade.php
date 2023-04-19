@extends('layouts.app')

@section('template_title')
    {{ $remitente->name ?? "{{ __('Show') Remitente" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Remitente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('remitentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Portal:</strong>
                            {{ $remitente->id_portal }}
                        </div>
                        <div class="form-group">
                            <strong>Aplicacion:</strong>
                            {{ $remitente->aplicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $remitente->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Delegacion:</strong>
                            {{ $remitente->id_delegacion }}
                        </div>
                        <div class="form-group">
                            <strong>Servidor:</strong>
                            {{ $remitente->servidor }}
                        </div>
                        <div class="form-group">
                            <strong>Cuenta:</strong>
                            {{ $remitente->cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $remitente->contraseña }}
                        </div>
                        <div class="form-group">
                            <strong>Puerto:</strong>
                            {{ $remitente->puerto }}
                        </div>
                        <div class="form-group">
                            <strong>Encriptacion:</strong>
                            {{ $remitente->encriptacion }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $remitente->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
