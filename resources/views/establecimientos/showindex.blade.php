<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( $establecimiento->nombre ) }}
        </h2>
    </x-slot>
    @section('content')
<div class="p-20 max-w-sm w-full lg:max-w-full lg:flex">
    <div class=" h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('https://cafescallis.com/wp-content/uploads/2023/08/tassa-cafe-dos-cafes-callis.jpg.webp')" title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
      <div class="mb-8">
        <p class="text-sm text-gray-600 flex items-center">
          <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
          </svg>
          Members only
        </p>
        <div class="text-gray-900 font-bold text-xl mb-2">{{ $establecimiento->nombre }}</div>
        <div class="my-4">
            <span class="font-semibold">Valoración promedio:</span>
            @php
                $rating = round($establecimiento->promedio_valoracion ?? 0, 1);
                $fullStars = floor($rating);
                $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
                $emptyStars = 5 - $fullStars - $halfStar;
            @endphp
            <span class="text-yellow-400">
                @for ($i = 0; $i < $fullStars; $i++)
                    ★
                @endfor
                @if ($halfStar)
                    ☆
                @endif
                @for ($i = 0; $i < $emptyStars; $i++)
                    ☆
                    @endfor
                </span>
                <span class="ml-2 text-gray-600">{{ $rating }}/5</span>
        </div>
        <p class="text-gray-700 text-base">
            {{ $establecimiento->direccion }}, {{ $establecimiento->barrio->nombre }}
           <p class="text-gray-700 text-base">
               @if (!empty($establecimiento->descripcion))
               {{ $establecimiento->descripcion }}
               @else
               No hay descripción disponible.
               Lorem ipsum dolor sit amet consectetur      
               @endif
           </p>
      </div>
      <div class="flex items-center">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $establecimiento->categoria->nombre }}</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
      </div>
    </div>
</div>
@endsection
</x-app-layout>