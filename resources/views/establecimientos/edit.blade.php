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
<x-input-label for="categoria">Categoría</x-input-label>
<select name="categoria" id="categoria" class="form-control">
    <option value="">Seleccione una categoría</option>
    @foreach($categorias as $categoria)
        <option value="{{ $categoria->id }}" @if($establecimiento->categoria->id == $categoria->id) selected @endif>
                {{ $categoria->nombre }}
            </option>
    @endforeach
</select>
<x-input-label for="direccion">
Direccion del  Establecimeinto
</x-input-label>

<span>Direccion actual: <b>{{ $establecimiento->direccion }}</b></span>
<x-input-label for="direccion">
Calle o carrera
</x-input-label>
<x-text-input type="text" id="calle" name="calle" required >
</x-text-input>
<x-input-label for="direccion">
numero y/o letra
</x-input-label>
<x-text-input type="text" id="numero" name="numero" required>
</x-text-input>

<x-input-label for="latitud">
    Latitud
</x-input-label>
<x-text-input type="number" step="any" id="latitud" name="latitud" required value="{{ $establecimiento->coordenadas_lat }}">
</x-text-input>

<x-input-label for="longitud">
    Longitud
</x-input-label>
<x-text-input type="number" step="any" id="longitud" name="longitud" required value="{{ $establecimiento->coordenadas_long }}">
</x-text-input>
<x-input-label for="barrio">Barrio</x-input-label>
<div x-data="{ localidad: 'Seleccione un barrio' }" class="text-center">
    <select id="barrio" name="barrio"
        @change="fetch(`/localidad/${$event.target.value}`)
            .then(response => response.json())
            .then(data => localidad = data ? data.nombre : 'Localidad no encontrada')
            .catch(() => localidad = 'Error al obtener la localidad')">
        <option value="">Seleccione un barrio</option>
        @foreach ($barrios as $barrio)
            <option value="{{ $barrio->id }}" @if ($establecimiento->barrio->id == $barrio->id) selected @endif>{{ $barrio->nombre }}</option>                
        @endforeach
    </select>

    <div class="my-4">
        <label>Localidad Del Barrio Seleccionado:</label>
        <h2 x-text="localidad"></h2>
    </div>
</div>
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