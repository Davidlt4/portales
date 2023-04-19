@extends('layouts.app')

@section('template_title')
    {{ $correo->name ?? "{{ __('Show') Correo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Correo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('correos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Remitente:</strong>
                            {{ $correo->id_remitente }}
                        </div>
                        <div class="form-group">
                            <strong>Destinatarios:</strong>
                            {{ $correo->destinatarios }}
                        </div>
                        <div class="form-group">
                            <strong>Cc:</strong>
                            {{ $correo->cc }}
                        </div>
                        <div class="form-group">
                            <strong>Cco:</strong>
                            {{ $correo->cco }}
                        </div>
                        <div class="form-group">
                            <strong>Texto:</strong>
                            {{ $correo->texto }}
                        </div>
                        <div class="form-group">
                            <strong>Asunto:</strong>
                            {{ $correo->asunto }}
                        </div>
                        <div class="form-group">
                            <strong>Enviado:</strong>
                            {{ $correo->enviado }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $correo->status }}
                        </div>
                        <div class="form-group">
                            <strong>Mensaje:</strong>
                            {{ $correo->mensaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
