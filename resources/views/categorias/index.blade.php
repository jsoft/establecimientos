<!-- resources/views/categorias/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorías') }}
        </h2>
    </x-slot>


@section('content')
<div>
    @if (session('success'))
    <div class="alert alert-success m-3">{{ session('success') }}</div>
    @endif
</div>

<div class="flex">
    <div>
        <x-primary-button class="my-5 ml-8">
            <a href="{{ route('categorias.create') }}">Crear Nueva Categoría</a>
        </x-primary-button>

    </div>
    <div class="flex-col items-center justify-center mt-20 shadow-lg">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight text-center">Lista de Categorías</h1>
      <table >
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 text-center">ID</th>
                <th class="px-8 py-3 border-b-2 border-gray-200 text-center">Nombre</th>
                <th class="px-8 py-4 border-b-2 border-gray-200 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td class="px-5 py-3 border-b-2 border-gray-200 text-center">{{ $categoria->id }}</td>
                <td class="px-5 py-3 border-b-2 border-gray-200 text-center">{{ $categoria->nombre }}</td>
                <td class="border-b-2 px-6 border-gray-200 text-center">
                    <x-primary-button>
                        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-info">Ver</a>
                    </x-primary-button>

                    <x-secondary-button>
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
                    </x-secondary-button>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">
                            Eliminar
                        </x-danger-button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<button @click="open = true" class="bg-blue-500 text-white px-4 py-2 rounded">Abrir Modal</button>
<div x-data="{ open: false }" x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded shadow-lg w-1/3">
        <h2 class="text-lg font-semibold mb-4">Este es un Modal</h2>
    </div>
    <button @click="open = false" class="bg-red-500 text-white px-4 py-2 rounded">Cerrar</button>
</div>
@endsection
</x-app-layout>