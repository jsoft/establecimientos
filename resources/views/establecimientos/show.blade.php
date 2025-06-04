<div class="flex flex-col justify-center mt-10 shadow-lg items-center text-center">
        <h1>Detalles del Esatablecimientos</h1>
        <p><strong>ID:</strong> {{ $establecimiento->id }}</p>
        <p><strong>Nombre:</strong> {{ $establecimiento->nombre }}</p>
        <p><strong>Direccion:</strong> {{ $establecimiento->direccion }}</p>
        <p><strong>longitud:</strong> {{ $establecimiento->coordenadas_lat }}</p>
        <p><strong>latitud:</strong> {{ $establecimiento->coordenadas_long }}</p>
        <p><strong>Categoria:</strong> {{ $establecimiento->categoria->nombre }}</p>
        <p><strong>Barrio:</strong> {{ $establecimiento->barrio->nombre }}</p>
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
            <x-primary-button x-on:click="open = false" class="my-4">
                {{ __('Cerrar') }}
            </x-primary-button>
        </div>
</div>
