<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recolectore
 *
 * @property $id_recolector
 * @property $nombres
 * @property $apellidos
 * @property $cc_identificacion
 * @property $recicladoras_Id_recicladora
 * @property $rutas_id_ruta
 * @property $localidades_id_localidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Localidade $localidade
 * @property Recicladora $recicladora
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recolectore extends Model
{
    
    static $rules = [
		'id_recolector' => 'required',
		'nombres' => 'required',
		'apellidos' => 'required',
		'cc_identificacion' => 'required',
		'recicladoras_Id_recicladora' => 'required',
		'rutas_id_ruta' => 'required',
		'localidades_id_localidad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_recolector','nombres','apellidos','cc_identificacion','recicladoras_Id_recicladora','rutas_id_ruta','localidades_id_localidad'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function localidade()
    {
        return $this->hasOne('App\Models\Localidade', 'id_localidad', 'localidades_id_localidad');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recicladora()
    {
        return $this->hasOne('App\Models\Recicladora', 'Id_recicladora', 'recicladoras_Id_recicladora');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'id_ruta', 'rutas_id_ruta');
    }
    

}
