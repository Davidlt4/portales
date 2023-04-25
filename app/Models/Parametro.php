<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parametro
 *
 * @property $id
 * @property $lote
 * @property $min
 * @property $ultimo
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Parametro extends Model
{
    
    static $rules = [
		'lote' => 'required',
		'min' => 'required',
		'ultimo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lote','min','ultimo'];



}
