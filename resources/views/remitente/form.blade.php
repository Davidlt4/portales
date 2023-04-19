<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_portal') }}
            {{ Form::text('id_portal', $remitente->id_portal, ['class' => 'form-control' . ($errors->has('id_portal') ? ' is-invalid' : ''), 'placeholder' => 'Id Portal']) }}
            {!! $errors->first('id_portal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aplicacion') }}
            {{ Form::text('aplicacion', $remitente->aplicacion, ['class' => 'form-control' . ($errors->has('aplicacion') ? ' is-invalid' : ''), 'placeholder' => 'Aplicacion']) }}
            {!! $errors->first('aplicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $remitente->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_delegacion') }}
            {{ Form::text('id_delegacion', $remitente->id_delegacion, ['class' => 'form-control' . ($errors->has('id_delegacion') ? ' is-invalid' : ''), 'placeholder' => 'Id Delegacion']) }}
            {!! $errors->first('id_delegacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servidor') }}
            {{ Form::text('servidor', $remitente->servidor, ['class' => 'form-control' . ($errors->has('servidor') ? ' is-invalid' : ''), 'placeholder' => 'Servidor']) }}
            {!! $errors->first('servidor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuenta') }}
            {{ Form::text('cuenta', $remitente->cuenta, ['class' => 'form-control' . ($errors->has('cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Cuenta']) }}
            {!! $errors->first('cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contraseña') }}
            {{ Form::text('contraseña', $remitente->contraseña, ['class' => 'form-control' . ($errors->has('contraseña') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
            {!! $errors->first('contraseña', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('puerto') }}
            {{ Form::text('puerto', $remitente->puerto, ['class' => 'form-control' . ($errors->has('puerto') ? ' is-invalid' : ''), 'placeholder' => 'Puerto']) }}
            {!! $errors->first('puerto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('encriptacion') }}
            {{ Form::text('encriptacion', $remitente->encriptacion, ['class' => 'form-control' . ($errors->has('encriptacion') ? ' is-invalid' : ''), 'placeholder' => 'Encriptacion']) }}
            {!! $errors->first('encriptacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $remitente->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>