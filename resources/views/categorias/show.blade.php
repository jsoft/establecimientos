<!-- resources/views/categorias/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalles de la Categoría</h1>
    <p><strong>ID:</strong> {{ $categoria->id }}</p>
    <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>

    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver al listado</a>
@endsection