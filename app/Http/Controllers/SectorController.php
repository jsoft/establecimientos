<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
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
        $sectores = Sector::paginate(10);
        return view('sectores.index', compact('sectores'));
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
    public function show(SectorController $sectoroController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectorController $sectoroController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectorController $sectoroController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SectorController $sectoroController)
    {
        //
    }
}
