<div class="flex justify-center ">
    <div class="mt-20 shadow-lg items-center text-center">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight m-4">Editar Categoría</h1>
        <form action="{{ route('establecimientos.update', $establecimiento->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <x-input-label for="nombre">
                    Nombre del Establecimiento
                </x-input-label>
                <x-text-input type="text" id="nombre" name="nombre" value="{{ $establecimiento->nombre }}" required>
                </x-text-input>
                <x-input-label for="direccion">
Direccion del  Establecimeinto
</x-input-label>
<x-text-input type="text" id="direccion" name="direccion" value="{{ $establecimiento->direccion }}" required>
</x-text-input>
<x-input-label for="categoria">Categoría</x-input-label>
<select name="categoria" id="categoria" class="form-control">
    <option value="">Seleccione una categoría</option>
    @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" @if($establecimiento->categoria->id == $categoria->id) selected @endif>
                {{ $categoria->nombre }}
            </option>
    @endforeach
</select>
<x-input-label for="ciudad">Ciudad</x-input-label>
<select name="ciudad" id="ciudad" class="form-control">
    <option value="">Seleccione una una ciudad</option>
    @foreach($ciudades as $ciudad)
    <option value="{{ $ciudad->id }}" @if($establecimiento->ciudad->id == $ciudad->id) selected @endif >{{ $ciudad->nombre }}</option>
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