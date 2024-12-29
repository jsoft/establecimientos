<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('content')
    <div class="grid grid-row-4 gap-4 items-center">
      <header id="header-principal" class="border border-gray-200 my-5 h-80 bg-auto bg-no-repeat bg-center bg-cover flex items-center justify-center text-center" 
      style=" background-image: url(https://imagenes.eltiempo.com/files/image_1200_600/uploads/2023/01/31/63d92a122f24b.jpeg);">
      <h1  class="text-4xl font-bold backdrop-blur-md uppercase rounded-md">Es café <br>y nos encanta, no necesita presentación
        😄</h1>
      </header>
      
      <div class="grid grid-cols-5 gap-4">
        <aside id="sidebar-principal" class="border border-gray-500  justify-items-center text-center">
          
                      <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <h3>Categorías</h3>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
            @foreach ($categorias as $categoria)
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $categoria->id }}</td>
                <td class="px-5 py-2 border-b-2 border-gray-200 text-center">{{ $categoria->nombre }}</td> 
            @endforeach
                    </x-slot>
                </x-dropdown>
            </div>
          <ul class="list-disc list-inside ">
            <li><input type="checkbox">Baristas</li>
            <li>Ambientales</li>
            <li>Tradicionales</li>
          </ul>
          <h3>Localidades</h3>
          <ul class="list-disc list-inside ">
            <li>Baristas</li>
            <li>Ambientales</li>
            <li>Tradicionales</li>
          </ul>
          <h3>Barrios</h3>
          <ul class="list-disc list-inside ">
            <li>Baristas</li>
            <li>Ambientales</li>
            <li>Tradicionales</li>
          </ul>
        </aside>
        <section id="cafeterias-listado" class="border border-gray-500 col-span-4 justify-items-center text-center">
          <h2>Cafeterías Recomendadas</h2>
          <article>
            <h3>Café Aromas</h3>
            <p>Una experiencia única con el mejor café de Bogotá.</p>
          </article>
          <article>
            <h3>Especial Coffee</h3>
            <p>Café artesanal y ambiente acogedor.</p>
          </article>
        </section>          
      </div>
      
      <footer class="border border-gray-500">
        <p>&copy; 2024 Valoración de Cafeterías. Todos los derechos reservados.</p>
      </footer>
    </div>
    @endsection
</x-app-layout>
