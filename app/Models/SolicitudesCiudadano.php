<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SolicitudesCiudadano
 *
 * @property $id_solicitud
 * @property $fecha_inicio_solicitud
 * @property $fecha_fin_solicitud
 * @property $descripcion_solicitud
 * @property $identificador_solicitiud
 * @property $estado_solicitud
 * @property $fecha_recoleccion
 * @property $hora_recoleccion
 * @property $users_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Ruta[] $rutas
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SolicitudesCiudadano extends Model
{
    
    static $rules = [
		'id_solicitud' => 'required',
		'fecha_inicio_solicitud' => 'required',
		'fecha_fin_solicitud' => 'required',
		'descripcion_solicitud' => 'required',
		'identificador_solicitiud' => 'required',
		'estado_solicitud' => 'required',
		'fecha_recoleccion' => 'required',
		'hora_recoleccion' => 'required',
		'users_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_solicitud','fecha_inicio_solicitud','fecha_fin_solicitud','descripcion_solicitud','identificador_solicitiud','estado_solicitud','fecha_recoleccion','hora_recoleccion','users_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutas()
    {
        return $this->hasMany('App\Models\Ruta', 'solicitudes_ciudadanos_id_solicitud', 'id_solicitud');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
    

}
