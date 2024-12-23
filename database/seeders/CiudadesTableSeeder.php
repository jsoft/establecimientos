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

        // Crear user admin
        $users = [
            ['name' => 'aministrador', 'email' => 'admin@admin.com', 'password' => bcrypt('contraseña')],
            ['name' => 'user_prueba', 'email' => 'user@admin.com', 'password' => bcrypt('*prueba*')],
        ];

        DB::table('users')->insert($users);

        // Crear Categorias de cafeterias
        $categorias = [
            ['nombre' => 'Cafés de Especialidad'],
            ['nombre' => 'Cafeterías Tradicionales'],
            ['nombre' => 'Cafés para Coworking'],
            ['nombre' => 'Cafeterías Gourmet'],
            ['nombre' => 'Cafés Veganos y Saludables'],
            ['nombre' => 'Cafeterías con Terraza o Aire Libre'],
            ['nombre' => 'Cafeterías Temáticas'],
            ['nombre' => 'Cafés Rápidos (Takeaway)'],
            ['nombre' => 'Cafeterías Artesanales'],
            ['nombre' => 'Cafeterías de Café Colombiano'],
            ['nombre' => 'Cafeterías Internacionales'],
            ['nombre' => 'Cafeterías Minimalistas'],
            ['nombre' => 'Cafeterías Pet-Friendly'],
            ['nombre' => 'Cafeterías 24 Horas'],
            ['nombre' => 'Cafeterías con Música en Vivo']
        ];

        DB::table('categorias')->insert($categorias);

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
            ['nombre' => 'Santa Ana', 'localidad_id' => 1], // Usaquén
            ['nombre' => 'Cedritos', 'localidad_id' => 1],
            ['nombre' => 'La Carolina', 'localidad_id' => 1],
            ['nombre' => 'El Codito', 'localidad_id' => 1],

            ['nombre' => 'El Chicó', 'localidad_id' => 2], // Chapinero
            ['nombre' => 'La Cabrera', 'localidad_id' => 2],
            ['nombre' => 'Los Rosales', 'localidad_id' => 2],
            ['nombre' => 'Marly', 'localidad_id' => 2],

            ['nombre' => 'La Macarena', 'localidad_id' => 3], // Santa Fe
            ['nombre' => 'San Diego', 'localidad_id' => 3],
            ['nombre' => 'Las Aguas', 'localidad_id' => 3],
            ['nombre' => 'Lourdes', 'localidad_id' => 3],

            ['nombre' => 'Villa de los Alpes', 'localidad_id' => 4], // San Cristóbal
            ['nombre' => 'San Blas', 'localidad_id' => 4],
            ['nombre' => 'La Gloria', 'localidad_id' => 4],
            ['nombre' => 'Montecarlo', 'localidad_id' => 4],

            ['nombre' => 'Rincón de Suba', 'localidad_id' => 5], // Suba
            ['nombre' => 'Niza Norte', 'localidad_id' => 5],
            ['nombre' => 'Lombardía', 'localidad_id' => 5],
            ['nombre' => 'Tuna Baja', 'localidad_id' => 5],

            ['nombre' => 'Boyacá Real', 'localidad_id' => 6], // Engativá
            ['nombre' => 'Minuto de Dios', 'localidad_id' => 6],
            ['nombre' => 'Santa Helenita', 'localidad_id' => 6],
            ['nombre' => 'Normandía', 'localidad_id' => 6],

            ['nombre' => 'Villemar', 'localidad_id' => 7], // Fontibón
            ['nombre' => 'Capellanía', 'localidad_id' => 7],
            ['nombre' => 'Zona Franca', 'localidad_id' => 7],
            ['nombre' => 'Modelia', 'localidad_id' => 7],

            ['nombre' => 'Ciudad Kennedy', 'localidad_id' => 8], // Kennedy
            ['nombre' => 'Patio Bonito', 'localidad_id' => 8],
            ['nombre' => 'Castilla', 'localidad_id' => 8],
            ['nombre' => 'Timiza', 'localidad_id' => 8],

            ['nombre' => 'Bosa Piamonte', 'localidad_id' => 9], // Bosa
            ['nombre' => 'Bosa La Libertad', 'localidad_id' => 9],
            ['nombre' => 'Bosa El Recreo', 'localidad_id' => 9],
            ['nombre' => 'San Bernardino', 'localidad_id' => 9],

            ['nombre' => 'La Soledad', 'localidad_id' => 10], // Teusaquillo
            ['nombre' => 'Palermo', 'localidad_id' => 10],
            ['nombre' => 'Quinta Paredes', 'localidad_id' => 10],
            ['nombre' => 'Santa Teresita', 'localidad_id' => 10],

            ['nombre' => 'El Tesoro', 'localidad_id' => 11], // Ciudad Bolívar
            ['nombre' => 'Madelena', 'localidad_id' => 11],
            ['nombre' => 'Candelaria La Nueva', 'localidad_id' => 11],
            ['nombre' => 'Meissen', 'localidad_id' => 11],
        ];

        DB::table('barrios')->insert($barrios);
    }
}
