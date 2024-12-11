<!-- resources/views/categorias/edit.blade.php -->
<div class="flex justify-center ">
    <div class="mt-20 shadow-lg items-center text-center">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight m-4">Editar Ciudad</h1>
        <form action="{{ route('ciudades.update', $ciudad->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <x-input-label for="nombre">
                    Nombre de la Ciudad
                </x-input-label>
                <x-text-input type="text" class="form-control" id="nombre" name="nombre" value="{{ $ciudad->nombre }}" required>
                </x-text-input>
<x-input-label for="categoria">Departamento</x-input-label>
<select name="categoria" id="categoria" class="form-control">
    <option value="">Seleccione un Departamento</option>
    @foreach($departamentos as $departamento)
            <option value="{{ $departamento->id }}" @if($ciudad->departamento->id == $departamento->id) selected @endif>
                {{ $departamento->nombre }}
            </option>
    @endforeach
</select>                
            </div>
            <x-primary-button type="submit" class="my-4">
                Actualizar
            </x-primary-button>
        </form>
        <x-primary-button x-on:click="open = false" class="my-4">
         {{ __('Cerrar') }}
        </x-primary-button>
    </div>
</div>
