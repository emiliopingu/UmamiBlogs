<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\recetas_chinas;
use Illuminate\Http\Request;

class recetas_chinasController extends Controller
{
    public function index()
    {
        $recetas_china = recetas_chinas::latest()->paginate(2);

        return view('China.index', compact('recetas_china'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //Funcion donde se valida la informacion pasada por la visat y crea el objeto en la base de datos
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
        recetas_chinas::create($request->all());

        // with() pasamos datos a la vista
        return redirect()->route('China.index')
            ->with('success', 'recetas_china created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(recetas_chinas $recetas_china)
    {
        return view('China.show', compact('recetas_china'));
    }


    function find(Request $request)
    {
        $request->validate([
            'query' => 'required|min:2'
        ]);

        $search_text = $request->input('query');
        $recetas_china = DB::table('umamiblog')
            ->where('nombre', 'LIKE', '%' . $search_text . '%')
            ->paginate(2);
        return view('search', ['recetas_china' => $recetas_china]);
    }
    public function volverIndex()
    {
        return view('./index');
    }
}
