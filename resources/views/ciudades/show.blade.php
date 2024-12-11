<!-- resources/views/categorias/show.blade.php -->

<div class="flex flex-col justify-center mt-10 shadow-lg items-center text-center">
        <h1>Detalles de la Ciudad</h1>
        <p><strong>ID:</strong> {{ $ciudad->id }}</p>
        <p><strong>Nombre:</strong> {{ $ciudad->nombre }}</p>
        <x-primary-button x-on:click="open = false" class="my-4">
                {{ __('Cerrar') }}
        </x-primary-button>
</div>

