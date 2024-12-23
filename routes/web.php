<?php

use App\Http\Controllers\BarrioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\DepartamentoController;
use App\Models\Barrio;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('categorias', CategoriaController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('establecimientos', EstablecimientoController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('barrios', BarrioController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('ciudades', CiudadController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('departamentos', DepartamentoController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('sectores', SectorController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('localidades', LocalidadController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/localidad/{barrioId}', function ($barrioId) {
        $barrio = Barrio::with('localidad')->find($barrioId);
        return response()->json($barrio ? $barrio->localidad : null);
    });
});
require __DIR__ . '/auth.php';
