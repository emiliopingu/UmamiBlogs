<?php

namespace App\Http\Controllers;

use App\Models\recetas_coreanas;
use Illuminate\Http\Request;

class recetas_coreanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas_coreana = recetas_coreanas::latest()->paginate(3);

        return view('Corea.index', compact('recetas_coreana'));
    }

    public function create()
    {
        return view('Corea.create');
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
         recetas_coreanas::create($request->all());

          // with() pasamos datos a la vista
          return redirect()->route('recetas_coreanas.index')
                        ->with('success','recetas_coreanas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comida_china  $comida_china
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_coreanas $recetas_coreana)
    {
        return view('Corea.show', compact('recetas_coreana'));
    }

}
