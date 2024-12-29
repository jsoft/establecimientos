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

        // Crear cafeterias para las pruebas
        $cafeterias = [
            ['nombre' => 'Café Aromas', 'direccion' => 'Carrera 12 #34-56', 'coordenadas_lat' => 4.635623, 'coordenadas_long' => -74.070998, 'categoria_id' => 1, 'barrio_id' => 1], // Santa Ana
            ['nombre' => 'Especial Coffee', 'direccion' => 'Calle 45 #23-19', 'coordenadas_lat' => 4.627890, 'coordenadas_long' => -74.078234, 'categoria_id' => 1, 'barrio_id' => 2], // Cedritos
            ['nombre' => 'Tradicional Café', 'direccion' => 'Carrera 9 #22-45', 'coordenadas_lat' => 4.609876, 'coordenadas_long' => -74.070987, 'categoria_id' => 2, 'barrio_id' => 5], // El Chicó
            ['nombre' => 'El Rincón del Café', 'direccion' => 'Calle 32 #15-10', 'coordenadas_lat' => 4.615789, 'coordenadas_long' => -74.072345, 'categoria_id' => 2, 'barrio_id' => 8], // Marly
            ['nombre' => 'Work & Coffee', 'direccion' => 'Avenida Caracas #50-12', 'coordenadas_lat' => 4.625123, 'coordenadas_long' => -74.069876, 'categoria_id' => 3, 'barrio_id' => 6], // La Cabrera
            ['nombre' => 'Café y Estudio', 'direccion' => 'Carrera 7 #18-21', 'coordenadas_lat' => 4.603567, 'coordenadas_long' => -74.065432, 'categoria_id' => 3, 'barrio_id' => 9], // La Macarena
            ['nombre' => 'Gourmet Coffee', 'direccion' => 'Calle 19 #25-30', 'coordenadas_lat' => 4.608901, 'coordenadas_long' => -74.064321, 'categoria_id' => 4, 'barrio_id' => 37], // La Soledad
            ['nombre' => 'Café Fino', 'direccion' => 'Carrera 8 #10-24', 'coordenadas_lat' => 4.610123, 'coordenadas_long' => -74.072789, 'categoria_id' => 4, 'barrio_id' => 10], // San Diego
            ['nombre' => 'Vegan & Coffee', 'direccion' => 'Calle 40 #8-17', 'coordenadas_lat' => 4.627654, 'coordenadas_long' => -74.071987, 'categoria_id' => 5, 'barrio_id' => 38], // Palermo
            ['nombre' => 'Orgánico Café', 'direccion' => 'Carrera 11 #20-13', 'coordenadas_lat' => 4.616890, 'coordenadas_long' => -74.069123, 'categoria_id' => 5, 'barrio_id' => 13], // Villa de los Alpes
            ['nombre' => 'Terraza del Café', 'direccion' => 'Avenida Suba #80-14', 'coordenadas_lat' => 4.701234, 'coordenadas_long' => -74.073456, 'categoria_id' => 6, 'barrio_id' => 17], // Rincón de Suba
            ['nombre' => 'Aire Libre Café', 'direccion' => 'Carrera 6 #15-16', 'coordenadas_lat' => 4.601789, 'coordenadas_long' => -74.070432, 'categoria_id' => 6, 'barrio_id' => 14], // San Blas
            ['nombre' => 'Temático Café', 'direccion' => 'Calle 12 #9-18', 'coordenadas_lat' => 4.609321, 'coordenadas_long' => -74.067890, 'categoria_id' => 7, 'barrio_id' => 43], // Candelaria La Nueva
            ['nombre' => 'Fantasy Coffee', 'direccion' => 'Carrera 15 #23-45', 'coordenadas_lat' => 4.615432, 'coordenadas_long' => -74.069876, 'categoria_id' => 7, 'barrio_id' => 44], // Meissen
            ['nombre' => 'Café Express', 'direccion' => 'Calle 50 #10-12', 'coordenadas_lat' => 4.637654, 'coordenadas_long' => -74.076543, 'categoria_id' => 8, 'barrio_id' => 25], // Villemar
            ['nombre' => 'Café al Paso', 'direccion' => 'Carrera 20 #18-22', 'coordenadas_lat' => 4.622567, 'coordenadas_long' => -74.073210, 'categoria_id' => 8, 'barrio_id' => 16], // Montecarlo
            ['nombre' => 'Café Artesanal', 'direccion' => 'Calle 25 #7-14', 'coordenadas_lat' => 4.612345, 'coordenadas_long' => -74.063789, 'categoria_id' => 9, 'barrio_id' => 36], // San Bernardino
            ['nombre' => 'Hecho en Casa', 'direccion' => 'Carrera 12 #30-40', 'coordenadas_lat' => 4.617890, 'coordenadas_long' => -74.071123, 'categoria_id' => 9, 'barrio_id' => 30], // Patio Bonito
            ['nombre' => 'Colombian Coffee', 'direccion' => 'Calle 33 #9-20', 'coordenadas_lat' => 4.620123, 'coordenadas_long' => -74.068765, 'categoria_id' => 10, 'barrio_id' => 31], // Castilla
            ['nombre' => 'Café Tradición', 'direccion' => 'Carrera 10 #12-18', 'coordenadas_lat' => 4.605678, 'coordenadas_long' => -74.070987, 'categoria_id' => 10, 'barrio_id' => 42], // Madelena
        ];

        DB::table('establecimientos')->insert($cafeterias);
    }
}
