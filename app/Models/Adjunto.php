<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adjunto
 *
 * @property $id
 * @property $id_correo
 * @property $contenido
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Adjunto extends Model
{
    
    static $rules = [
		'id_correo' => 'required',
		'contenido' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_correo','contenido'];



}
