<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_recolector') }}
            {{ Form::text('id_recolector', $recolectore->id_recolector, ['class' => 'form-control' . ($errors->has('id_recolector') ? ' is-invalid' : ''), 'placeholder' => 'Id Recolector']) }}
            {!! $errors->first('id_recolector', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $recolectore->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $recolectore->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cc_identificacion') }}
            {{ Form::text('cc_identificacion', $recolectore->cc_identificacion, ['class' => 'form-control' . ($errors->has('cc_identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Cc Identificacion']) }}
            {!! $errors->first('cc_identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('recicladoras_Id_recicladora') }}
            {{ Form::text('recicladoras_Id_recicladora', $recolectore->recicladoras_Id_recicladora, ['class' => 'form-control' . ($errors->has('recicladoras_Id_recicladora') ? ' is-invalid' : ''), 'placeholder' => 'Recicladoras Id Recicladora']) }}
            {!! $errors->first('recicladoras_Id_recicladora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutas_id_ruta') }}
            {{ Form::text('rutas_id_ruta', $recolectore->rutas_id_ruta, ['class' => 'form-control' . ($errors->has('rutas_id_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Rutas Id Ruta']) }}
            {!! $errors->first('rutas_id_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('localidades_id_localidad') }}
            {{ Form::text('localidades_id_localidad', $recolectore->localidades_id_localidad, ['class' => 'form-control' . ($errors->has('localidades_id_localidad') ? ' is-invalid' : ''), 'placeholder' => 'Localidades Id Localidad']) }}
            {!! $errors->first('localidades_id_localidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>