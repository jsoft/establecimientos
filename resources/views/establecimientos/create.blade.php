

<form class="flex flex-col text-center gap-2" action="{{ route('establecimientos.store') }}" method="POST">
    @csrf
<x-input-label for="nombre">
Nombre de Establecimeinto
</x-input-label>
<x-text-input type="text" id="nombre" name="nombre" required>
</x-text-input>
<x-input-label for="categoria">Categoría</x-input-label>
<select name="categoria" id="categoria" class="text-center" required>
    <option value="">Seleccione una categoría</option>
    @foreach($categorias as $categoria)
    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
    @endforeach
</select>
<x-input-label for="direccion">
Direccion del  Establecimeinto
</x-input-label>
<x-input-label for="direccion">
Calle o carrera
</x-input-label>
<x-text-input type="text" id="calle" name="calle" required>
</x-text-input>
<x-input-label for="direccion">
numero y/o letra
</x-input-label>
<x-text-input type="text" id="numero" name="numero" required>
</x-text-input>

<x-input-label for="latitud">
    Latitud
</x-input-label>
<x-text-input type="number" step="any" id="latitud" name="latitud" required>
</x-text-input>

<x-input-label for="longitud">
    Longitud
</x-input-label>
<x-text-input type="number" step="any" id="longitud" name="longitud" required>
</x-text-input>


<div x-data="{ localidad: 'Seleccione un barrio' }" class="text-center">
    <select id="barrio" name="barrio"
        @change="fetch(`/localidad/${$event.target.value}`)
            .then(response => response.json())
            .then(data => localidad = data ? data.nombre : 'Localidad no encontrada')
            .catch(() => localidad = 'Error al obtener la localidad')">
        <option value="">Seleccione un barrio</option>
        @foreach ($barrios as $barrio)
            <option value="{{ $barrio->id }}">{{ $barrio->nombre }}</option>
        @endforeach
    </select>

    <div class="my-4">
        <label>Localidad Del Barrio Seleccionado:</label>
        <h2 x-text="localidad"></h2>
    </div>
</div>
<x-primary-button type="submit" class="my-4">
Guardar
</x-primary-button>
<x-primary-button x-on:click="open = false" class="my-4">
{{ __('Cerrar') }}
</x-primary-button>
</form>


<script>
</script>