<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establecimiento;
use App\Models\Localidad;
use App\Models\Barrio;
use App\Models\Categoria;

class FiltroController extends Controller
{

    public function __construct()
    {
        // Middleware->tiene que esta registrado para poder ver la vista
        $this->middleware('auth');

        //$barrios = Barrio::all();
        //$localidades = Localidad::all();
        //$establecimientos = Establecimiento::paginate(10);
        //return view('dashboard', compact('establecimientos', 'barrios', 'localidades', 'categorias'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::select('categorias.id', 'categorias.nombre')->get();
        return view('dashboard', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
