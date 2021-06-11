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
        $recetas_japonesa = recetas_japonesas::latest()->paginate(2);

        return view('Japon.index', compact('recetas_japonesa'))
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
         recetas_japonesas::create($request->all());

          // with() pasamos datos a la vista
          return redirect()->route('Japon.index')
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
