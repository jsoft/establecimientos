<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Barrio;
use Illuminate\Http\Request;

class BarrioController extends Controller
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
        $barrios = Barrio::paginate(10);
        return view('barrios.index', compact('barrios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barrio $barrio)
    {
        $ciudades = Ciudad::select('ciudades.id', 'ciudades.nombre')->get();
        return view('barrios.edit', compact('barrio', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barrio $barrio)
    {
        $nombre_barrio = $request->nombre;
        $ciudad_id_barrio = $request->ciudad;
        $request->validate([
            'nombre' => 'required|string|max:45',
            'ciudad' => 'required|integer'
        ]);
        $barrio->update([
            'nombre' => $nombre_barrio,
            'ciudad_id' => $ciudad_id_barrio,
        ]);
        return redirect()->route('barrios.index')->with('success', 'Barrio actualizado correctamente');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ciudades = Ciudad::select('ciudades.id', 'ciudades.nombre')->get();
        return view('barrios.create', compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre_barrio = $request->nombre;
        $ciudad_id_barrio = $request->ciudad;
        $request->validate([
            'nombre' => 'required|string|max:45',
            'ciudad' => 'required|integer'
        ]);
        Barrio::create([
            'nombre' => $nombre_barrio,
            'ciudad_id' => $ciudad_id_barrio,
        ]);
        return redirect()->route('barrios.index')->with('success', 'Barrio creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $barrio)
    {
        $barrio = Barrio::find($barrio);
        return view('barrios.show', compact('barrio'));
    }

    public function destroy(string $barrio)
    {
        Barrio::destroy($barrio);
        return redirect()->route('barrios.index')->with('success', 'Barrio eliminado correctamente');
    }
}
