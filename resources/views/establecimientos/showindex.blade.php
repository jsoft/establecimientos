<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __( $establecimiento->nombre ) }}
        </h2>
    </x-slot>
    @section('content')
    <div class="flex flex-col justify-center mt-10 items-center text-center">
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="https://cafescallis.com/wp-content/uploads/2023/08/tassa-cafe-dos-cafes-callis.jpg.webp" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $establecimiento->nombre }}</div>
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
                    @if ($establecimiento->descripcion != null))
                    {{ $establecimiento->descripcion }}
                    
                    @else
                    No hay descripción disponible.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat non voluptatum saepe facere dicta beatae optio aspernatur animi! Eum nulla assumenda magnam est voluptatem quae odio excepturi, voluptatum at in!       
                    @endif
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $establecimiento->categoria->nombre }}</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
            </div>
        </div>
    </div>
</div>
@endsection
</x-app-layout>