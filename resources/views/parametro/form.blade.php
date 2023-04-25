<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('lote') }}
            {{ Form::text('lote', $parametro->lote, ['class' => 'form-control' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
            {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('min') }}
            {{ Form::text('min', $parametro->min, ['class' => 'form-control' . ($errors->has('min') ? ' is-invalid' : ''), 'placeholder' => 'Min']) }}
            {!! $errors->first('min', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ultimo') }}
            {{ Form::text('ultimo', $parametro->ultimo, ['class' => 'form-control' . ($errors->has('ultimo') ? ' is-invalid' : ''), 'placeholder' => 'Ultimo']) }}
            {!! $errors->first('ultimo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>