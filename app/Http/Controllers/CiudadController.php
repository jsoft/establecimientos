<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;

class CiudadController extends Controller
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
        $ciudades = Ciudad::paginate(10);
        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::select('departamentos.id', 'departamentos.nombre')->get();
        return view('ciudades.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nombre_ciudad = $request->nombre;
        $departamento_id_ciudad = $request->ciudad;
        $request->validate([
            'nombre' => 'required|string|max:45',
            'departamento' => 'nulleable|integer'
        ]);
        Ciudad::create([
            'nombre' => $nombre_ciudad,
            'departamento_id' => $departamento_id_ciudad,
        ]);
        return redirect()->route('ciudades.index')->with('success', 'Ciudad creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $ciudad)
    {
        $ciudad = Ciudad::find($ciudad);
        return view('ciudades.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ciudad = Ciudad::find($id);
        $departamentos = Departamento::select('departamentos.id', 'departamentos.nombre')->get();
        return view('ciudades.edit', compact('ciudad', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $ciudad)
    {
        $ciudad = Ciudad::find($ciudad);
        $nombre_ciudad = $request->nombre;
        $departamento_id_ciudad = $request->ciudad;
        $request->validate([
            'nombre' => 'required|string|max:45',
            'departamento' => 'nulleable|integer'
        ]);
        $ciudad->update([
            'nombre' => $nombre_ciudad,
            'departamento_id' => $departamento_id_ciudad,
        ]);
        return redirect()->route('ciudades.index')->with('success', 'Ciudad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $ciudad)
    {
        Ciudad::destroy($ciudad);
        return redirect()->route('ciudades.index')->with('success', 'Ciudad eliminada correctamente');
    }
}
