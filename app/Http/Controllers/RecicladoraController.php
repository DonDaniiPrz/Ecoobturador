<?php

namespace App\Http\Controllers;

use App\Models\Recicladora;
use Illuminate\Http\Request;

/**
 * Class RecicladoraController
 * @package App\Http\Controllers
 */
class RecicladoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recicladoras = Recicladora::paginate();

        return view('recicladora.index', compact('recicladoras'))
            ->with('i', (request()->input('page', 1) - 1) * $recicladoras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recicladora = new Recicladora();
        return view('recicladora.create', compact('recicladora'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recicladora::$rules);

        $recicladora = Recicladora::create($request->all());

        return redirect()->route('recicladoras.index')
            ->with('success', 'Recicladora created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recicladora = Recicladora::find($id);

        return view('recicladora.show', compact('recicladora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recicladora = Recicladora::find($id);

        return view('recicladora.edit', compact('recicladora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recicladora $recicladora
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recicladora $recicladora)
    {
        request()->validate(Recicladora::$rules);

        $recicladora->update($request->all());

        return redirect()->route('recicladoras.index')
            ->with('success', 'Recicladora updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recicladora = Recicladora::find($id)->delete();

        return redirect()->route('recicladoras.index')
            ->with('success', 'Recicladora deleted successfully');
    }
}
