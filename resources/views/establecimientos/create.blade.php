

<form class="flex flex-col text-center gap-2" action="{{ route('establecimientos.store') }}" method="POST">
    @csrf
<x-input-label for="nombre">
Nombre de Establecimeinto
</x-input-label>
<x-text-input type="text" id="nombre" name="nombre" required>
</x-text-input>
<x-input-label for="direccion">
Direccion del  Establecimeinto
</x-input-label>
<x-text-input type="text" id="direccion" name="direccion" required>
</x-text-input>
<x-input-label for="categoria">Categoría</x-input-label>
<select name="categoria" id="categoria" class="form-control">
    <option value="">Seleccione una categoría</option>
    @foreach($categorias as $categoria)
    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
    @endforeach
</select>
<x-input-label for="ciudad">Ciudad</x-input-label>
<select name="ciudad" id="ciudad" class="form-control">
    <option value="">Seleccione una una ciudad</option>
    @foreach($ciudades as $ciudad)
    <option value="{{ $ciudad->id }}">{{ $ciudad->nombre }}</option>
    @endforeach
</select>
<x-primary-button type="submit" class="my-4">
Guardar
</x-primary-button>
<x-primary-button x-on:click="open = false" class="my-4">
{{ __('Cerrar') }}
</x-primary-button>
</form>