<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ruta') }}
            {{ Form::text('id_ruta', $ruta->id_ruta, ['class' => 'form-control' . ($errors->has('id_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Id Ruta']) }}
            {!! $errors->first('id_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_ruta') }}
            {{ Form::text('descripcion_ruta', $ruta->descripcion_ruta, ['class' => 'form-control' . ($errors->has('descripcion_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Ruta']) }}
            {!! $errors->first('descripcion_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horario_ruta') }}
            {{ Form::text('horario_ruta', $ruta->horario_ruta, ['class' => 'form-control' . ($errors->has('horario_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Horario Ruta']) }}
            {!! $errors->first('horario_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ruta') }}
            {{ Form::text('fecha_ruta', $ruta->fecha_ruta, ['class' => 'form-control' . ($errors->has('fecha_ruta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ruta']) }}
            {!! $errors->first('fecha_ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta_realizada') }}
            {{ Form::text('Ruta_realizada', $ruta->Ruta_realizada, ['class' => 'form-control' . ($errors->has('Ruta_realizada') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Realizada']) }}
            {!! $errors->first('Ruta_realizada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('recicladoras_Id_recicladora') }}
            {{ Form::text('recicladoras_Id_recicladora', $ruta->recicladoras_Id_recicladora, ['class' => 'form-control' . ($errors->has('recicladoras_Id_recicladora') ? ' is-invalid' : ''), 'placeholder' => 'Recicladoras Id Recicladora']) }}
            {!! $errors->first('recicladoras_Id_recicladora', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('barrios_id_barrio') }}
            {{ Form::text('barrios_id_barrio', $ruta->barrios_id_barrio, ['class' => 'form-control' . ($errors->has('barrios_id_barrio') ? ' is-invalid' : ''), 'placeholder' => 'Barrios Id Barrio']) }}
            {!! $errors->first('barrios_id_barrio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('solicitudes_ciudadanos_id_solicitud') }}
            {{ Form::text('solicitudes_ciudadanos_id_solicitud', $ruta->solicitudes_ciudadanos_id_solicitud, ['class' => 'form-control' . ($errors->has('solicitudes_ciudadanos_id_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Solicitudes Ciudadanos Id Solicitud']) }}
            {!! $errors->first('solicitudes_ciudadanos_id_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('solicitudes_empresas_id_solicitud') }}
            {{ Form::text('solicitudes_empresas_id_solicitud', $ruta->solicitudes_empresas_id_solicitud, ['class' => 'form-control' . ($errors->has('solicitudes_empresas_id_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Solicitudes Empresas Id Solicitud']) }}
            {!! $errors->first('solicitudes_empresas_id_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Motivo_cancelacion') }}
            {{ Form::text('Motivo_cancelacion', $ruta->Motivo_cancelacion, ['class' => 'form-control' . ($errors->has('Motivo_cancelacion') ? ' is-invalid' : ''), 'placeholder' => 'Motivo Cancelacion']) }}
            {!! $errors->first('Motivo_cancelacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>