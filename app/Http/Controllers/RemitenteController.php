<?php

namespace App\Http\Controllers;

use App\Models\Remitente;
use App\Models\Correo;
use Illuminate\Http\Request;

/**
 * Class RemitenteController
 * @package App\Http\Controllers
 */
class RemitenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remitentes = Remitente::paginate();

        return view('remitente.index', compact('remitentes'))
            ->with('i', (request()->input('page', 1) - 1) * $remitentes->perPage());
    }
     
     /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function mails($id)
    {
        
        $idremi=$id;
        $correos=Correo::paginate();

        return view('remitente.mails', compact('correos','idremi'))
            ->with('i', (request()->input('page', 1) - 1) * $correos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $remitente = new Remitente();
        return view('remitente.create', compact('remitente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Remitente::$rules);

        $remitente = Remitente::create($request->all());

        return redirect()->route('remitentes.index')
            ->with('success', 'Remitente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $remitente = Remitente::find($id);

        return view('remitente.show', compact('remitente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $remitente = Remitente::find($id);

        return view('remitente.edit', compact('remitente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Remitente $remitente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remitente $remitente)
    {
        request()->validate(Remitente::$rules);

        $remitente->update($request->all());

        return redirect()->route('remitentes.index')
            ->with('success', 'Remitente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $remitente = Remitente::find($id)->delete();

        return redirect()->route('remitentes.index')
            ->with('success', 'Remitente deleted successfully');
    }
}
