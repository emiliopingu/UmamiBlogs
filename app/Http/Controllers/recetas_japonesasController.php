<?php

namespace App\Http\Controllers;

use App\Models\recetas_japonesas;
use Illuminate\Http\Request;

class recetas_japonesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas_japonesa = recetas_japonesas::latest()->paginate(3);

        return view('Japon.index', compact('recetas_japonesa'));
    }

    public function create()
    {
        return view('japon.create');
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
         recetas_japonesas::create($request->all());

          // with() pasamos datos a la vista
          return redirect()->route('recetas_japonesas.index')
                        ->with('success','recetas_japonesas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\comida_japonesas  $comida_japonesas
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_japonesas $recetas_japonesa)
    {
        return view('Japon.show',compact('recetas_japonesa'));
    }
}
