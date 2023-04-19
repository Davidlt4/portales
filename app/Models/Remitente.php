<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Remitente
 *
 * @property $id
 * @property $id_portal
 * @property $aplicacion
 * @property $id_usuario
 * @property $id_delegacion
 * @property $servidor
 * @property $cuenta
 * @property $contraseña
 * @property $puerto
 * @property $encriptacion
 * @property $activo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Remitente extends Model
{
    
    static $rules = [
		'id_portal' => 'required',
		'aplicacion' => 'required',
		'id_usuario' => 'required',
		'id_delegacion' => 'required',
		'servidor' => 'required',
		'cuenta' => 'required',
		'contraseña' => 'required',
		'puerto' => 'required',
		'encriptacion' => 'required',
		'activo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_portal','aplicacion','id_usuario','id_delegacion','servidor','cuenta','contraseña','puerto','encriptacion','activo'];



}
