<!-- resources/views/categorias/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="flex-row mt-20 shadow-lg items-center text-center">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight m-4">Editar Categoría</h1>
        
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <x-input-label for="nombre">
                    Nombre de la Categoría
                </x-input-label>
                <x-text-input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
                </x-text-input>

            </div>
            <x-primary-button type="submit" class="my-4">
                Actualizar
            </x-primary-button>
        </form>
    </div>
</div>
@endsection