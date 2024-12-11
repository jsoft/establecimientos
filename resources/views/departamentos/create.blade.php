<!-- resources/views/categorias/create.blade.php -->

<div class="flex justify-center items-center">
    <div class="flex-row mt-20 shadow-lg items-center text-center">
            <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight m-4">Crear Nueva Categoría</h1>
        <form action="{{ route('categorias.store') }}" method="POST" class="m-6">
            @csrf
            <div class="form-group">
                <x-input-label for="nombre">
                    Nombre de la Categoría
                </x-input-label>
                <x-text-input type="text" class="form-control" id="nombre" name="nombre" required>
                </x-text-input>
            </div>
            <x-primary-button type="submit" class="my-4">
                Guardar
            </x-primary-button>
        <x-primary-button x-on:click="open = false" class="my-4">
         {{ __('Cerrar') }}
        </x-primary-button>
        </form>
    </div>
</div>
