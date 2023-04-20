<?php

namespace App\Models;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
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

    public function enviarEmail(){

      $details=[
        'asunto' => $this->asunto,
        'contenido' => $this->texto
      ];

      $remitente=Remitente::find($this->id_remitente);

      Config::set('mail.mailers.smtp.encryption',$remitente->encriptacion);
      // Config::set('mail.mailers.smtp.port',$remitente->puerto);
      Config::set('mail.mailers.smtp.username',$remitente->cuenta);
      Config::set('mail.mailers.smtp.password',$remitente->contraseña);
      Config::set('mail.from.address',$remitente->cuenta);

      Mail::to($this->destinatarios)->send(new TestMail($details));

      $this->enviado=1;

      return "Correo enviado";

    }



}
