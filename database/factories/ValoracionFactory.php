<?php



namespace Database\Factories;

use App\Models\Valoracion;
use App\Models\User;
use App\Models\Establecimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Valoracion>
 */
class ValoracionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'calificacion' => $this->faker->numberBetween(1, 5),
            'comentario' => $this->faker->sentence(),
            'usuario_id' => $this->faker->numberBetween(1, 2), // Crea un usuario relacionado
            'establecimiento_id' => $this->faker->numberBetween(1, 20), // Crea un establecimiento relacionado
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
