<!-- resources/views/categorias/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorías') }}
        </h2>
    </x-slot>


@section('content')
<div>
    @if (session('success'))
    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
            <p class="font-bold">{{ session('success') }}</p>
    </div>
    @endif
</div>

<div class="flex flex-col">
                    <div x-data="modalCreate()" class="my-5 mx-5">
                        <x-primary-button @click="loadModalContent()">
                            Crear Nueva Categoria
                        </x-primary-button>
                            <!-- Contenedor del modal -->
                        <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                            <div class="bg-white p-6 rounded shadow-lg w-1/3" x-html="modalContent"></div>
                        </div>
                    </div>
    <div class="flex-col mt-20 shadow-lg">
        <h1 class="capitalize text-2xl font-bold text-gray-800 leading-tight text-center">Lista de Categorías</h1>
      <table class="w-full">
        <thead>
            <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 text-center">ID</th>
                <th class="px-8 py-3 border-b-2 border-gray-200 text-center">Nombre</th>
                <th class="px-8 py-4 border-b-2 border-gray-200 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $categoria->id }}</td>
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $categoria->nombre }}</td>
                <td class="border-b-2 px-5 py-2 border-gray-200 flex justify-center items-center">
                    <div x-data="modalHandler()">
                        <x-primary-button @click="loadModalContent({{ $categoria->id }})">
                            Ver
                        </x-primary-button>
                            <!-- Contenedor del modal -->
                        <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                            <div class="bg-white p-6 rounded shadow-lg w-1/3" x-html="modalContent"></div>
                        </div>
                    </div>
                        
                    <div x-data="modalEdit()" class="mx-4">
                        <x-secondary-button @click="loadModalContent({{ $categoria->id }})">
                            Editar
                        </x-secondary-button>
                            <!-- Contenedor del modal -->
                        <div x-show="open" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
                            <div class="bg-white p-6 rounded shadow-lg w-1/3" x-html="modalContent"></div>
                        </div>
                    </div>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">
                            Eliminar
                        </x-danger-button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
<script>
    function modalHandler() {
        return {
            open: false,
            modalContent: '',
            loadModalContent(id) {
                axios.get(`/categorias/${id}`)
                    .then(response => {
                        this.modalContent = response.data;
                        this.open = true;
                    })
                    .catch(error => {
                        console.error("Error al cargar el contenido del modal:", error);
                    });
            }
        }
    }

        function modalEdit() {
        return {
            open: false,
            modalContent: '',
            loadModalContent(id) {
                axios.get(`/categorias/${id}/edit`)
                    .then(response => {
                        this.modalContent = response.data;
                        this.open = true;
                    })
                    .catch(error => {
                        console.error("Error al cargar el contenido del modal:", error);
                    });
            }
        }
    }

        function modalCreate() {
        return {
            open: false,
            modalContent: '',
            loadModalContent(id) {
                axios.get(`/categorias/create`)
                    .then(response => {
                        this.modalContent = response.data;
                        this.open = true;
                    })
                    .catch(error => {
                        console.error("Error al cargar el contenido del modal:", error);
                    });
            }
        }
    }
</script>
@endsection
</x-app-layout>