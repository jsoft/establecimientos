<div class="flex flex-col justify-center mt-10 shadow-lg items-center text-center">
        <h1>Detalles del Esatablecimientos</h1>
        <p><strong>ID:</strong> {{ $establecimiento->id }}</p>
        <p><strong>Nombre:</strong> {{ $establecimiento->nombre }}</p>
        <p><strong>Direccion:</strong> {{ $establecimiento->direccion }}</p>
        <p><strong>Categoria:</strong> {{ $establecimiento->categoria->nombre }}</p>
        <p><strong>Barrio:</strong> {{ $establecimiento->barrio->nombre }}</p>
        <x-primary-button x-on:click="open = false" class="my-4">
                {{ __('Cerrar') }}
        </x-primary-button>
</div>
