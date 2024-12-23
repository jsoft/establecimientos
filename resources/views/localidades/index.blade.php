<!-- resources/views/categorias/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Localidades') }}
        </h2>
    </x-slot>


@section('content')
<div>
    @if (session('success'))
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{ session('success') }}</p>
    </div>
    @endif
</div>
    <div class="flex-col mt-20 shadow-lg">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight text-center">Lista de Localidades</h1>
      <table class="w-full">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 text-center">ID</th>
                <th class="px-8 py-3 border-b-2 border-gray-200 text-center">Nombre</th>
                <th class="px-8 py-3 border-b-2 border-gray-200 text-center">Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($localidades as $localidad)
            <tr>
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $localidad->id }}</td>
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $localidad->nombre }}</td>
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $localidad->ciudad->nombre }}</td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection
</x-app-layout>