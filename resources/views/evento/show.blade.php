@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? "{{ __('Show') Evento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Token:</strong>
                            {{ $evento->token }}
                        </div>
                        <div class="form-group">
                            <strong>Id Correo:</strong>
                            {{ $evento->id_correo }}
                        </div>
                        <div class="form-group">
                            <strong>Abierto:</strong>
                            {{ $evento->abierto }}
                        </div>
                        <div class="form-group">
                            <strong>Encabezado:</strong>
                            {{ $evento->encabezado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
