<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\Valoracion;
use \App\Models\Establecimiento;
use \App\Models\User;
use Dotenv\Parser\Value;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rules\RequiredIf;
use Illuminate\Validation\Rules\RequiredUnless;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\In;
use Illuminate\Validation\Rules\NotIn;
use Illuminate\Validation\Rules\ProhibitedIf;
use Illuminate\Validation\Rules\ProhibitedUnless;
use Illuminate\Validation\Rules\RequiredWith;
use Illuminate\Validation\Rules\RequiredWithout;

class ValoracionController extends Controller
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
        //
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
        $request->validate([
            'comentario' => 'required|string|max:600',
            'usuario_id' => 'required|integer|exists:users,id',
            'establecimiento_id' => 'required|integer|exists:establecimientos,id',
            'calificacion' => 'required|integer|min:1|max:5',
        ]);


        $valoracion_comentario = $request->comentario;
        $valoracion_usuario_id = $request->usuario_id;
        $valoracion_establecimiento_id = $request->establecimiento_id;
        $valoracion_calificacion = $request->calificacion;
        $lit = Valoracion::create([
            'comentario' => $valoracion_comentario,
            'usuario_id' => $valoracion_usuario_id,
            'establecimiento_id' => $valoracion_establecimiento_id,
            'calificacion' => $valoracion_calificacion,
        ]);

        return redirect()->back()->with('success', '¡Valoración guardada correctamente!');
    }

    /**
     * Mostrar el ranking promedio de un establecimiento.
     */
    public function showRanking($id)
    {
        $establecimiento = \App\Models\Establecimiento::with('valoraciones')->findOrFail($id);
        $promedio = $establecimiento->valoraciones->avg('calificacion');
        return response()->json([
            'establecimiento_id' => $id,
            'promedio' => $promedio,
            'total_valoraciones' => $establecimiento->valoraciones->count(),
        ]);
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
