<?php

namespace App\Http\Controllers;

use App\Models\SolicitudesCiudadano;
use Illuminate\Http\Request;

/**
 * Class SolicitudesCiudadanoController
 * @package App\Http\Controllers
 */
class SolicitudesCiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudesCiudadanos = SolicitudesCiudadano::paginate();

        return view('solicitudes-ciudadano.index', compact('solicitudesCiudadanos'))
            ->with('i', (request()->input('page', 1) - 1) * $solicitudesCiudadanos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitudesCiudadano = new SolicitudesCiudadano();
        return view('solicitudes-ciudadano.create', compact('solicitudesCiudadano'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SolicitudesCiudadano::$rules);

        $solicitudesCiudadano = SolicitudesCiudadano::create($request->all());

        return redirect()->route('solicitudes-ciudadanos.index')
            ->with('success', 'SolicitudesCiudadano created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitudesCiudadano = SolicitudesCiudadano::find($id);

        return view('solicitudes-ciudadano.show', compact('solicitudesCiudadano'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitudesCiudadano = SolicitudesCiudadano::find($id);

        return view('solicitudes-ciudadano.edit', compact('solicitudesCiudadano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SolicitudesCiudadano $solicitudesCiudadano
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudesCiudadano $solicitudesCiudadano)
    {
        request()->validate(SolicitudesCiudadano::$rules);

        $solicitudesCiudadano->update($request->all());

        return redirect()->route('solicitudes-ciudadanos.index')
            ->with('success', 'SolicitudesCiudadano updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitudesCiudadano = SolicitudesCiudadano::find($id)->delete();

        return redirect()->route('solicitudes-ciudadanos.index')
            ->with('success', 'SolicitudesCiudadano deleted successfully');
    }
}
