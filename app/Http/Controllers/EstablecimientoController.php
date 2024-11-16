<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ciudad;
use App\Models\Establecimiento;
use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    public function __construct()
    {
        // Middleware->tiene que esta registrado para poder ver la vista
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $establecimientos = Establecimiento::paginate(10);
        return view('establecimientos.index', compact('establecimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ciudades = Ciudad::select('ciudades.id', 'ciudades.nombre')->get();
        $categorias = Categoria::select('categorias.id', 'categorias.nombre')->get();
        return view('establecimientos.create', compact('categorias', 'ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $nombre_establecimiento = $request->nombre;
        $direccion_establecimiento = $request->direccion;
        $ciudad_id_establecimiento = $request->ciudad;
        $categoria_id_establecimiento = $request->categoria;
        $request->validate([
            'nombre' => 'required|string|max:45',
            'direccion' => 'required|string|max:60',
            'ciudad' => 'required|integer',
            'categoria' => 'required|integer'
        ]);

        Establecimiento::create([
            'nombre' => $nombre_establecimiento,
            'direccion' => $direccion_establecimiento,
            'ciudad_id' => $ciudad_id_establecimiento,
            'categoria_id' => $categoria_id_establecimiento,
        ]);

        return redirect()->route('establecimientos.index')->with('success', 'Establecimiento creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
