<?php

namespace App\Http\Controllers;

use App\Models\Barrio;
use App\Models\Categoria;
use App\Models\Establecimiento;
use App\Models\Localidad;
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
        $barrios = Barrio::select('barrios.id', 'barrios.nombre', 'localidad_id')->get();
        $localidades = Localidad::select('localidades.id', 'localidades.nombre')->get();
        $categorias = Categoria::select('categorias.id', 'categorias.nombre')->get();
        return view('establecimientos.create', compact('categorias', 'localidades', 'barrios'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $nombre_establecimiento = $request->nombre;
        $direccion_establecimiento = $request->calle . ' # ' . $request->numero;
        $barrio_id_establecimiento = $request->barrio;
        $categoria_id_establecimiento = $request->categoria;
        $latitud_establecimiento = $request->barrio;
        $longitud_establecimiento = $request->barrio;
        $descripcion_establecimiento = $request->descripcion;

        $request->validate([
            'nombre' => 'required|string|max:45',
            'calle' => 'required|string|max:45',
            'numero' => 'required|string|max:45',
            'barrio' => 'required|integer',
            'categoria' => 'required|integer',
            'latitud' => 'required',
            'longitud' => 'required',
            'descripcion' => 'string|max:255',
        ]);

        $lit = Establecimiento::create([
            'nombre' => $nombre_establecimiento,
            'direccion' => $direccion_establecimiento,
            'barrio_id' => $barrio_id_establecimiento,
            'categoria_id' => $categoria_id_establecimiento,
            'coordenadas_lat' => $latitud_establecimiento,
            'coordenadas_long' => $longitud_establecimiento,
            'descripcion' => $descripcion_establecimiento,
        ]);
        return redirect()->route('establecimientos.index')->with('success', 'Establecimiento creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $establecimiento)
    {
        $establecimiento = Establecimiento::find($establecimiento);

        return view('establecimientos.show', compact('establecimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Establecimiento $establecimiento)
    {
        $barrios = Barrio::select('barrios.id', 'barrios.nombre')->get();
        $localidades = Localidad::select('localidades.id', 'localidades.nombre')->get();
        $categorias = Categoria::select('categorias.id', 'categorias.nombre')->get();
        return view('establecimientos.edit', compact('establecimiento', 'localidades', 'categorias', 'barrios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Establecimiento $establecimiento)
    {
        $nombre_establecimiento = $request->nombre;
        $direccion_establecimiento = $request->calle . ' # ' . $request->numero;
        $barrio_id_establecimiento = $request->barrio;
        $categoria_id_establecimiento = $request->categoria;
        $latitud_establecimiento = $request->barrio;
        $longitud_establecimiento = $request->barrio;
        $descripcion_establecimiento = $request->descripcion;
        $request->validate([
            'nombre' => 'required|string|max:45',
            'calle' => 'required|string|max:45',
            'numero' => 'required|string|max:45',
            'barrio' => 'required|integer',
            'categoria' => 'required|integer',
            'latitud' => 'required',
            'longitud' => 'required',
            'descripcion' => 'string|max:255',

        ]);


        $establecimiento->update(
            [
                'nombre' => $nombre_establecimiento,
                'direccion' => $direccion_establecimiento,
                'barrio_id' => $barrio_id_establecimiento,
                'categoria_id' => $categoria_id_establecimiento,
                'coordenadas_lat' => $latitud_establecimiento,
                'coordenadas_long' => $longitud_establecimiento,
                'descripcion' => $descripcion_establecimiento,
            ]
        );

        return redirect()->route('establecimientos.index')->with('success', 'Establecimiento actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Establecimiento $establecimiento)
    {
        $establecimiento->delete();

        return redirect()->route('establecimientos.index')->with('success', 'Establecimiento eliminado con éxito.');
    }
}
