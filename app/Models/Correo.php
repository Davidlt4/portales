<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Correo
 *
 * @property $id
 * @property $id_remitente
 * @property $destinatarios
 * @property $cc
 * @property $cco
 * @property $texto
 * @property $asunto
 * @property $enviado
 * @property $status
 * @property $mensaje
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Correo extends Model
{
    
    static $rules = [
		'id_remitente' => 'required',
		'destinatarios' => 'required',
		'cc' => 'required',
		'cco' => 'required',
		'texto' => 'required',
		'asunto' => 'required',
		'enviado' => 'required',
		'status' => 'required',
		'mensaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_remitente','destinatarios','cc','cco','texto','asunto','enviado','status','mensaje'];



}
