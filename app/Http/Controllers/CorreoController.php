<?php

namespace App\Http\Controllers;

use App\Models\Correo;
use Illuminate\Http\Request;

/**
 * Class CorreoController
 * @package App\Http\Controllers
 */
class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correos = Correo::paginate();

        return view('correo.index', compact('correos'))
            ->with('i', (request()->input('page', 1) - 1) * $correos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $correo = new Correo();
        return view('correo.create', compact('correo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Correo::$rules);

        $correo = Correo::create($request->all());

        return redirect()->route('correos.index')
            ->with('success', 'Correo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $correo = Correo::find($id);

        return view('correo.show', compact('correo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $correo = Correo::find($id);

        return view('correo.edit', compact('correo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Correo $correo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Correo $correo)
    {
        request()->validate(Correo::$rules);

        $correo->update($request->all());

        return redirect()->route('correos.index')
            ->with('success', 'Correo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $correo = Correo::find($id)->delete();

        return redirect()->route('correos.index')
            ->with('success', 'Correo deleted successfully');
    }

    public static function enviar(){

        $datos=Correo::where("enviado",0)->get()[0]->getOriginal();

        $correo=new Correo();
    
        $correo->id=$datos['id'];
        $correo->id_remitente=$datos['id_remitente'];
        $correo->destinatarios=$datos['destinatarios'];
        $correo->cc=$datos['cc'];
        $correo->cco=$datos['cco'];
        $correo->texto=$datos['texto'];
        $correo->asunto=$datos['asunto'];
        $correo->enviado=$datos['enviado'];
        $correo->status=$datos['status'];
        $correo->mensaje=$datos['mensaje'];
        $correo->activo=$datos['activo'];


        // dd($correo->id);
        $correo->enviarEmail();
    }
}
