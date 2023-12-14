<?php

namespace App\Http\Controllers;

use App\Models\Recolectore;
use Illuminate\Http\Request;

/**
 * Class RecolectoreController
 * @package App\Http\Controllers
 */
class RecolectoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recolectores = Recolectore::paginate();

        return view('recolectore.index', compact('recolectores'))
            ->with('i', (request()->input('page', 1) - 1) * $recolectores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recolectore = new Recolectore();
        return view('recolectore.create', compact('recolectore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recolectore::$rules);

        $recolectore = Recolectore::create($request->all());

        return redirect()->route('recolectores.index')
            ->with('success', 'Recolectore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recolectore = Recolectore::find($id);

        return view('recolectore.show', compact('recolectore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recolectore = Recolectore::find($id);

        return view('recolectore.edit', compact('recolectore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recolectore $recolectore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recolectore $recolectore)
    {
        request()->validate(Recolectore::$rules);

        $recolectore->update($request->all());

        return redirect()->route('recolectores.index')
            ->with('success', 'Recolectore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recolectore = Recolectore::find($id)->delete();

        return redirect()->route('recolectores.index')
            ->with('success', 'Recolectore deleted successfully');
    }
}
