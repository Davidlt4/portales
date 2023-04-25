<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use App\Models\Remitente;
use App\Models\Adjunto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    //--------------------------------REMITENTES--------------------------------

    public function getRemitentes(){
        return Remitente::all();
    }

    public function postRemitente(Request $request){

        $request->validate([
            'id_portal' => 'required',
            'id_usuario' => 'required',
            'cuenta' => 'required',
            'contraseña' => 'required',
        ]);

        $remitente=new Remitente();
        
        $remitente->id_portal=$request->id_portal;
        $remitente->aplicacion=$request->aplicacion ?? '';
        $remitente->id_usuario=$request->id_usuario;
        $remitente->id_delegacion=$request->id_delegacion ?? '';
        $remitente->servidor=$request->servidor ?? '';
        $remitente->cuenta=$request->cuenta;
        $remitente->contraseña=$request->contraseña;
        $remitente->puerto=$request->puerto ?? 0;
        $remitente->encriptacion=$request->encriptacion ?? '';
        $remitente->activo=$request->activo ?? 1;

        $remitente->save();

        return $remitente->id;

    }

    public function updateRemitente(Request $request){

        $request->validate([
            'activo' => 'required',
            'id_remitente' => 'required',
        ]);

        $remitente=Remitente::find($request->id_remitente);

        $remitente->activo=$request->activo;
        $remitente->update();

        return $remitente;

    }

    //--------------------------------MAILS--------------------------------

    public function getCorreos(){
        return Correo::all();
    }

    public function postmail(Request $request){

        $request->validate([
            'destinatarios' => 'required'
        ]);

        $correo=new Correo();

        $id_usuario=$request->id_usuario;
        $id_delegacion=$request->id_delegacion;
        $id_portal=$request->id_portal;
        $cuenta=$request->cuenta;

        // dd(Remitente::select('id')->where('id_usuario',4));

        $remitente=Remitente::where('id_usuario',$id_usuario)->where('id_delegacion',$id_delegacion)->where('id_portal',$id_portal)->where('cuenta',$cuenta)->get();
        
        $correo->id_remitente=$remitente[0]->getOriginal()['id'];

        $correo->destinatarios=$request->destinatarios;
        $correo->cc=$request->cc ?? '';
        $correo->cco=$request->cco ?? '';
        $correo->texto=$request->texto ?? '';
        $correo->asunto=$request->asunto ?? '';
        $correo->enviado=$request->enviado ?? 0;
        $correo->activo=$request->activo ?? 1;
        $correo->status=$request->status ?? 200; 
        $correo->mensaje=$request->mensaje ?? 'OK';

        $correo->save();

        if(isset($request->adjunto)){
            $adjunto=new Adjunto();
            $adjunto->id_correo=$correo->id;
            $adjunto->contenido=$request->adjunto;
            $adjunto->tipo_archivo=$request->tipo_archivo;
            $adjunto->save();
        }

        // $correo->enviarEmail();

        return $correo->id;

    }

    public function updateEmail(Request $request){

        $request->validate([
            'activo' => 'required',
            'id_correo' => 'required',
        ]);

        $correo=Correo::find($request->id_correo);

        $correo->activo=$request->activo;
        $correo->update();

        return $correo;

    }

    //--------------------------------ADJUNTOS--------------------------------

    public function getAdjuntos(){
        return Adjunto::all();
    }


}
