<!-- resources/views/categorias/show.blade.php -->
        <h1>Detalles de la Categoría</h1>
        <p><strong>ID:</strong> {{ $categoria->id }}</p>
        <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver al listado</a>
        <x-secondary-button x-on:click="open = false">
         {{ __('Cerrar') }}
         </x-secondary-button>
