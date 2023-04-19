<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_remitente') }}
            {{ Form::text('id_remitente', $correo->id_remitente, ['class' => 'form-control' . ($errors->has('id_remitente') ? ' is-invalid' : ''), 'placeholder' => 'Id Remitente']) }}
            {!! $errors->first('id_remitente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('destinatarios') }}
            {{ Form::text('destinatarios', $correo->destinatarios, ['class' => 'form-control' . ($errors->has('destinatarios') ? ' is-invalid' : ''), 'placeholder' => 'Destinatarios']) }}
            {!! $errors->first('destinatarios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cc') }}
            {{ Form::text('cc', $correo->cc, ['class' => 'form-control' . ($errors->has('cc') ? ' is-invalid' : ''), 'placeholder' => 'Cc']) }}
            {!! $errors->first('cc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cco') }}
            {{ Form::text('cco', $correo->cco, ['class' => 'form-control' . ($errors->has('cco') ? ' is-invalid' : ''), 'placeholder' => 'Cco']) }}
            {!! $errors->first('cco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('texto') }}
            {{ Form::text('texto', $correo->texto, ['class' => 'form-control' . ($errors->has('texto') ? ' is-invalid' : ''), 'placeholder' => 'Texto']) }}
            {!! $errors->first('texto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('asunto') }}
            {{ Form::text('asunto', $correo->asunto, ['class' => 'form-control' . ($errors->has('asunto') ? ' is-invalid' : ''), 'placeholder' => 'Asunto']) }}
            {!! $errors->first('asunto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enviado') }}
            {{ Form::text('enviado', $correo->enviado, ['class' => 'form-control' . ($errors->has('enviado') ? ' is-invalid' : ''), 'placeholder' => 'Enviado']) }}
            {!! $errors->first('enviado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $correo->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mensaje') }}
            {{ Form::text('mensaje', $correo->mensaje, ['class' => 'form-control' . ($errors->has('mensaje') ? ' is-invalid' : ''), 'placeholder' => 'Mensaje']) }}
            {!! $errors->first('mensaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>