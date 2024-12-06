<!-- resources/views/categorias/show.blade.php -->

<div class="flex flex-col justify-center mt-10 shadow-lg items-center text-center">
        <h1>Detalles del Barrio</h1>
        <p><strong>ID:</strong> {{ $barrio->id }}</p>
        <p><strong>Nombre:</strong> {{ $barrio->nombre }}</p>
        <x-primary-button x-on:click="open = false" class="my-4">
                {{ __('Cerrar') }}
        </x-primary-button>
</div>

