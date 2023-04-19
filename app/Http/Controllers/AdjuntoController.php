<?php

namespace App\Http\Controllers;

use App\Models\Adjunto;
use Illuminate\Http\Request;

/**
 * Class AdjuntoController
 * @package App\Http\Controllers
 */
class AdjuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adjuntos = Adjunto::paginate();

        return view('adjunto.index', compact('adjuntos'))
            ->with('i', (request()->input('page', 1) - 1) * $adjuntos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $adjunto = new Adjunto();
        return view('adjunto.create', compact('adjunto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Adjunto::$rules);

        $adjunto = Adjunto::create($request->all());

        return redirect()->route('adjuntos.index')
            ->with('success', 'Adjunto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adjunto = Adjunto::find($id);

        return view('adjunto.show', compact('adjunto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adjunto = Adjunto::find($id);

        return view('adjunto.edit', compact('adjunto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Adjunto $adjunto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adjunto $adjunto)
    {
        request()->validate(Adjunto::$rules);

        $adjunto->update($request->all());

        return redirect()->route('adjuntos.index')
            ->with('success', 'Adjunto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $adjunto = Adjunto::find($id)->delete();

        return redirect()->route('adjuntos.index')
            ->with('success', 'Adjunto deleted successfully');
    }
}
