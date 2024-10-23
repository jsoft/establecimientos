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
            ['nombre' => 'Usaquén', 'ciudad_id' => $bogotaId],
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
            ['nombre' => 'Santa Ana', 'localidad_id' => $localidadesIds[0]], // Usaquén
            ['nombre' => 'Cedritos', 'localidad_id' => $localidadesIds[0]],
            ['nombre' => 'La Carolina', 'localidad_id' => $localidadesIds[0]],
            ['nombre' => 'El Codito', 'localidad_id' => $localidadesIds[0]],

            ['nombre' => 'El Chicó', 'localidad_id' => $localidadesIds[1]], // Chapinero
            ['nombre' => 'La Cabrera', 'localidad_id' => $localidadesIds[1]],
            ['nombre' => 'Los Rosales', 'localidad_id' => $localidadesIds[1]],
            ['nombre' => 'Marly', 'localidad_id' => $localidadesIds[1]],

            ['nombre' => 'La Macarena', 'localidad_id' => $localidadesIds[2]], // Santa Fe
            ['nombre' => 'San Diego', 'localidad_id' => $localidadesIds[2]],
            ['nombre' => 'Las Aguas', 'localidad_id' => $localidadesIds[2]],
            ['nombre' => 'Lourdes', 'localidad_id' => $localidadesIds[2]],

            ['nombre' => 'Villa de los Alpes', 'localidad_id' => $localidadesIds[3]], // San Cristóbal
            ['nombre' => 'San Blas', 'localidad_id' => $localidadesIds[3]],
            ['nombre' => 'La Gloria', 'localidad_id' => $localidadesIds[3]],
            ['nombre' => 'Montecarlo', 'localidad_id' => $localidadesIds[3]],

            ['nombre' => 'Rincón de Suba', 'localidad_id' => $localidadesIds[4]], // Suba
            ['nombre' => 'Niza Norte', 'localidad_id' => $localidadesIds[4]],
            ['nombre' => 'Lombardía', 'localidad_id' => $localidadesIds[4]],
            ['nombre' => 'Tuna Baja', 'localidad_id' => $localidadesIds[4]],

            ['nombre' => 'Boyacá Real', 'localidad_id' => $localidadesIds[5]], // Engativá
            ['nombre' => 'Minuto de Dios', 'localidad_id' => $localidadesIds[5]],
            ['nombre' => 'Santa Helenita', 'localidad_id' => $localidadesIds[5]],
            ['nombre' => 'Normandía', 'localidad_id' => $localidadesIds[5]],

            ['nombre' => 'Villemar', 'localidad_id' => $localidadesIds[6]], // Fontibón
            ['nombre' => 'Capellanía', 'localidad_id' => $localidadesIds[6]],
            ['nombre' => 'Zona Franca', 'localidad_id' => $localidadesIds[6]],
            ['nombre' => 'Modelia', 'localidad_id' => $localidadesIds[6]],

            ['nombre' => 'Ciudad Kennedy', 'localidad_id' => $localidadesIds[7]], // Kennedy
            ['nombre' => 'Patio Bonito', 'localidad_id' => $localidadesIds[7]],
            ['nombre' => 'Castilla', 'localidad_id' => $localidadesIds[7]],
            ['nombre' => 'Timiza', 'localidad_id' => $localidadesIds[7]],

            ['nombre' => 'Bosa Piamonte', 'localidad_id' => $localidadesIds[8]], // Bosa
            ['nombre' => 'Bosa La Libertad', 'localidad_id' => $localidadesIds[8]],
            ['nombre' => 'Bosa El Recreo', 'localidad_id' => $localidadesIds[8]],
            ['nombre' => 'San Bernardino', 'localidad_id' => $localidadesIds[8]],

            ['nombre' => 'La Soledad', 'localidad_id' => $localidadesIds[9]], // Teusaquillo
            ['nombre' => 'Palermo', 'localidad_id' => $localidadesIds[9]],
            ['nombre' => 'Quinta Paredes', 'localidad_id' => $localidadesIds[9]],
            ['nombre' => 'Santa Teresita', 'localidad_id' => $localidadesIds[9]],

            ['nombre' => 'El Tesoro', 'localidad_id' => $localidadesIds[10]], // Ciudad Bolívar
            ['nombre' => 'Madelena', 'localidad_id' => $localidadesIds[10]],
            ['nombre' => 'Candelaria La Nueva', 'localidad_id' => $localidadesIds[10]],
            ['nombre' => 'Meissen', 'localidad_id' => $localidadesIds[10]],
        ];

        DB::table('barrios')->insert($barrios);
    }
}
