<!-- resources/views/categorias/edit.blade.php -->
<div class="flex justify-center ">
    <div class="mt-20 shadow-lg items-center text-center">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight m-4">Editar Barrio</h1>
        <form action="{{ route('barrios.update', $barrio->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <x-input-label for="nombre">
                    Nombre de Barrio
                <x-text-input type="text" class="form-control" id="nombre" name="nombre" value="{{ $barrio->nombre }}" required>
                </x-text-input>
                <x-input-label for="ciudad">Localidad</x-input-label>
                <select name="ciudad" id="ciudad" class="form-control">
                    <option value="">Seleccione una Localidad</option>
                    @foreach($localidades as $localidad)
                    <option value="{{ $localidad->id }}" @if($barrio->localidad->id == $localidad->id) selected @endif >
                        {{ $localidad->nombre }}
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
        @endif 
    </div>
</div>
