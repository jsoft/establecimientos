<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Crear ciudades
        $ciudades = [
            ['nombre' => 'Bogotá'],
            ['nombre' => 'Medellín'],
            ['nombre' => 'Cali'],
            ['nombre' => 'Barranquilla'],
        ];

        DB::table('ciudades')->insert($ciudades);

        // Obtener el ID de Bogotá (asumiendo que es el primer registro)
        $bogotaId = DB::table('ciudades')->where('nombre', 'Bogotá')->first()->id;

        // Crear localidades para Bogotá
        $localidades = [
            ['nombre' => 'Usaquén', 'ciudad_id'],
            ['nombre' => 'Chapinero', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Santa Fe', 'ciudad_id' => $bogotaId],
            ['nombre' => 'San Cristóbal', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Suba', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Engativá', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Fontibón', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Kennedy', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Bosa', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Teusaquillo', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Ciudad Bolívar', 'ciudad_id' => $bogotaId],
        ];

        DB::table('localidades')->insert($localidades);

        // Obtener IDs de las localidades de Bogotá
        $localidadesIds = DB::table('localidades')->where('ciudad_id', $bogotaId)->pluck('id');

        // Crear barrios para las localidades de Bogotá
        $barrios = [
            ['nombre' => 'Santa Ana', 'ciudad_id' => $bogotaId], // Usaquén
            ['nombre' => 'Cedritos', 'ciudad_id' => $bogotaId],
            ['nombre' => 'La Carolina', 'ciudad_id' => $bogotaId],
            ['nombre' => 'El Codito', 'ciudad_id' => $bogotaId],

            ['nombre' => 'El Chicó', 'ciudad_id' => $bogotaId], // Chapinero
            ['nombre' => 'La Cabrera', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Los Rosales', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Marly', 'ciudad_id' => $bogotaId],

            ['nombre' => 'La Macarena', 'ciudad_id' => $bogotaId], // Santa Fe
            ['nombre' => 'San Diego', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Las Aguas', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Lourdes', 'ciudad_id' => $bogotaId],

            ['nombre' => 'Villa de los Alpes', 'ciudad_id' => $bogotaId], // San Cristóbal
            ['nombre' => 'San Blas', 'ciudad_id' => $bogotaId],
            ['nombre' => 'La Gloria', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Montecarlo', 'ciudad_id' => $bogotaId],

            ['nombre' => 'Rincón de Suba', 'ciudad_id' => $bogotaId], // Suba
            ['nombre' => 'Niza Norte', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Lombardía', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Tuna Baja', 'ciudad_id' => $bogotaId],

            ['nombre' => 'Boyacá Real', 'ciudad_id' => $bogotaId], // Engativá
            ['nombre' => 'Minuto de Dios', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Santa Helenita', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Normandía', 'ciudad_id' => $bogotaId],

            ['nombre' => 'Villemar', 'ciudad_id' => $bogotaId], // Fontibón
            ['nombre' => 'Capellanía', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Zona Franca', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Modelia', 'ciudad_id' => $bogotaId],

            ['nombre' => 'Ciudad Kennedy', 'ciudad_id' => $bogotaId], // Kennedy
            ['nombre' => 'Patio Bonito', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Castilla', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Timiza', 'ciudad_id' => $bogotaId],

            ['nombre' => 'Bosa Piamonte', 'ciudad_id' => $bogotaId], // Bosa
            ['nombre' => 'Bosa La Libertad', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Bosa El Recreo', 'ciudad_id' => $bogotaId],
            ['nombre' => 'San Bernardino', 'ciudad_id' => $bogotaId],

            ['nombre' => 'La Soledad', 'ciudad_id' => $bogotaId], // Teusaquillo
            ['nombre' => 'Palermo', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Quinta Paredes', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Santa Teresita', 'ciudad_id' => $bogotaId],

            ['nombre' => 'El Tesoro', 'ciudad_id' => $bogotaId], // Ciudad Bolívar
            ['nombre' => 'Madelena', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Candelaria La Nueva', 'ciudad_id' => $bogotaId],
            ['nombre' => 'Meissen', 'ciudad_id' => $bogotaId],
        ];

        DB::table('barrios')->insert($barrios);
    }
}
