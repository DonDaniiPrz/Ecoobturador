<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_solicitud') }}
            {{ Form::text('id_solicitud', $solicitudesCiudadano->id_solicitud, ['class' => 'form-control' . ($errors->has('id_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Id Solicitud']) }}
            {!! $errors->first('id_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_solicitud') }}
            {{ Form::text('fecha_inicio_solicitud', $solicitudesCiudadano->fecha_inicio_solicitud, ['class' => 'form-control' . ($errors->has('fecha_inicio_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Solicitud']) }}
            {!! $errors->first('fecha_inicio_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_solicitud') }}
            {{ Form::text('fecha_fin_solicitud', $solicitudesCiudadano->fecha_fin_solicitud, ['class' => 'form-control' . ($errors->has('fecha_fin_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Solicitud']) }}
            {!! $errors->first('fecha_fin_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_solicitud') }}
            {{ Form::text('descripcion_solicitud', $solicitudesCiudadano->descripcion_solicitud, ['class' => 'form-control' . ($errors->has('descripcion_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Solicitud']) }}
            {!! $errors->first('descripcion_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificador_solicitiud') }}
            {{ Form::text('identificador_solicitiud', $solicitudesCiudadano->identificador_solicitiud, ['class' => 'form-control' . ($errors->has('identificador_solicitiud') ? ' is-invalid' : ''), 'placeholder' => 'Identificador Solicitiud']) }}
            {!! $errors->first('identificador_solicitiud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_solicitud') }}
            {{ Form::text('estado_solicitud', $solicitudesCiudadano->estado_solicitud, ['class' => 'form-control' . ($errors->has('estado_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Estado Solicitud']) }}
            {!! $errors->first('estado_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_recoleccion') }}
            {{ Form::text('fecha_recoleccion', $solicitudesCiudadano->fecha_recoleccion, ['class' => 'form-control' . ($errors->has('fecha_recoleccion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Recoleccion']) }}
            {!! $errors->first('fecha_recoleccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_recoleccion') }}
            {{ Form::text('hora_recoleccion', $solicitudesCiudadano->hora_recoleccion, ['class' => 'form-control' . ($errors->has('hora_recoleccion') ? ' is-invalid' : ''), 'placeholder' => 'Hora Recoleccion']) }}
            {!! $errors->first('hora_recoleccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('users_id') }}
            {{ Form::text('users_id', $solicitudesCiudadano->users_id, ['class' => 'form-control' . ($errors->has('users_id') ? ' is-invalid' : ''), 'placeholder' => 'Users Id']) }}
            {!! $errors->first('users_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>