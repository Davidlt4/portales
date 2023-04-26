<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('token') }}
            {{ Form::text('token', $evento->token, ['class' => 'form-control' . ($errors->has('token') ? ' is-invalid' : ''), 'placeholder' => 'Token']) }}
            {!! $errors->first('token', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_correo') }}
            {{ Form::text('id_correo', $evento->id_correo, ['class' => 'form-control' . ($errors->has('id_correo') ? ' is-invalid' : ''), 'placeholder' => 'Id Correo']) }}
            {!! $errors->first('id_correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('abierto') }}
            {{ Form::text('abierto', $evento->abierto, ['class' => 'form-control' . ($errors->has('abierto') ? ' is-invalid' : ''), 'placeholder' => 'Abierto']) }}
            {!! $errors->first('abierto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('encabezado') }}
            {{ Form::text('encabezado', $evento->encabezado, ['class' => 'form-control' . ($errors->has('encabezado') ? ' is-invalid' : ''), 'placeholder' => 'Encabezado']) }}
            {!! $errors->first('encabezado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>