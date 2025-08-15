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
        <aside id="sidebar-principal" class="border border-gray-500  justify-items-start text-center">
          
          <div class="text-left">
            <h1 class="font-bold mx-2">Categorías</h1>
            <form action="{{ route('establecimientos.index') }}" method="GET">
                        <x-primary-button>
                            Filtrar :3
                        </x-primary-button>
                        @csrf            
                      <ul>
            @foreach ($categorias as $categoria)
              <li><input value="{{ $categoria->id }}" name="categoria_filtro" type="checkbox" class="mx-2">{{ $categoria->nombre }}</li>
              @endforeach
              </ul>
            </form>
          </div>
          <div class="text-left">
            <h1 class="font-bold mx-2">Barrios</h1>
                      <ul>
            @foreach ($barrios as $barrio)
              <li class=""><input value="{{ $barrio->id }}" type="checkbox" class="mx-2">{{ $barrio->nombre }}</li>
              @endforeach
                    </ul>
          </div>
          <div class="text-left">
            <h1 class="font-bold mx-2">Localidades</h1>
            <form action="{{ route('establecimientos.index') }}" method="GET">
                        <x-primary-button>
                            Filtrar :3
                        </x-primary-button>
                        @csrf
              <ul>
                @foreach ($localidades as $localidad)
                <li class=""><input value="{{ $localidad->id }}" type="checkbox" class="mx-2">{{ $localidad->nombre }}</li>
                @endforeach
              </ul>
            </form>
          </div>
        </aside>
        <section id="cafeterias-listado" class="border border-gray-500 col-span-4 justify-items-start text-center">
          <h2>Cafeterías Recomendadas</h2>
          @foreach ($establecimientos as $establecimiento)
          <article class="m-4 w-max">
            <div class="max-w-sm w-full lg:max-w-full lg:flex">
              <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://cafescallis.com/wp-content/uploads/2023/08/tassa-cafe-dos-cafes-callis.jpg.webp')" title="Woman holding a mug">
              </div>
              <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <a href="{{  route('establecimientos.showindex',[$establecimiento->id]) }}">
                  <div class="text-gray-900 font-bold text-xl mb-2">{{ $establecimiento->nombre }}</div>
                </a>
                <div class="mb-8">
                  <p class="text-sm text-gray-600 flex items-center">
                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    <span class="mr-2">Valoración:</span>
                  <div class="flex items-center mb-2">
                    @php
                      $rating = round($establecimiento->promedio_valoracion ?? 0, 1);
                      $fullStars = floor($rating);
                      $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
                      $emptyStars = 5 - $fullStars - $halfStar;
                    @endphp
                    @for ($i = 0; $i < $fullStars; $i++)
                      <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><polygon points="10,1 12.59,7.36 19.51,7.36 13.97,11.63 16.56,17.99 10,13.72 3.44,17.99 6.03,11.63 0.49,7.36 7.41,7.36"/></svg>
                    @endfor
                    @if ($halfStar)
                      <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><defs><linearGradient id="half"><stop offset="50%" stop-color="#facc15"/><stop offset="50%" stop-color="#e5e7eb"/></linearGradient></defs><polygon fill="url(#half)" points="10,1 12.59,7.36 19.51,7.36 13.97,11.63 16.56,17.99 10,13.72 3.44,17.99 6.03,11.63 0.49,7.36 7.41,7.36"/></svg>
                    @endif
                    @for ($i = 0; $i < $emptyStars; $i++)
                      <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20"><polygon points="10,1 12.59,7.36 19.51,7.36 13.97,11.63 16.56,17.99 10,13.72 3.44,17.99 6.03,11.63 0.49,7.36 7.41,7.36"/></svg>
                    @endfor
                    <span class="ml-2 text-gray-700 text-sm">{{ $rating }}/5</span>
                  </div>
                  <p class="text-gray-700 text-base">{{ $establecimiento->descripcion }}</p>
                </div>
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full mr-4" src="https://pinblooms.com/wp-content/uploads/2021/01/laravel.png" alt="Avatar of Jonathan Reinink">
                  <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{ $establecimiento->direccion }}</p>
                    <p class="text-gray-600">{{ $establecimiento->categoria->nombre }}</p>
                  </div>
                </div>
              </div>
            </div>
          </article>
          @endforeach
        </section>          
      </div>
      
      <footer class="border border-gray-500">
        <p>&copy; 2024 Valoración de Cafeterías. Todos los derechos reservados.</p>
      </footer>
    </div>
    @endsection
</x-app-layout>
