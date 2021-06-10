<?php

namespace App\Http\Controllers;

use App\Models\recetas_tailandesas;
use Illuminate\Http\Request;

class recetas_tailandesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas_tailandesa = recetas_tailandesas::latest()->paginate(5);

        return view('Tailandia.index', compact('recetas_tailandesa'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'ingredientes' => 'required',
            'valoracion_text' => 'required',
            'valoracion_int' => 'required',
            'imagen' => 'required',
        ]);
             // Recupera todos los datos de request en un array
             recetas_tailandesas::create($request->all());

          // with() pasamos datos a la vista
          return redirect()->route('Tailandia.index')
                        ->with('success','recetas_coreanas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recetas_tailandesas  $recetas_tailandesas
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_tailandesas $recetas_tailandesa)
    {
        return view('Tailandia.show',compact('recetas_tailandesa'));
    }
}
