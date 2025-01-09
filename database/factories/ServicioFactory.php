<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Cliente;
use App\Models\Equipo;
use App\Models\Estado;
use App\Models\User;

class ServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $user = User::first();
        if (!$user) {
            $user = User::factory()->create();
        }

        return [
            'precio' => $this->faker->numberBetween(0, 9223372036854775807),
            'fecha_recepcion' => $this->faker->date('Y-m-d H:i:s'),
            'problema' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'fecha_diagnostico' => $this->faker->date('Y-m-d H:i:s'),
            'diagnostico' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'fecha_entrega' => $this->faker->date('Y-m-d H:i:s'),
            'solucion' => $this->faker->text($this->faker->numberBetween(5, 65535)),
            'cliente_id' => $this->faker->word,
            'user_id' => $this->faker->word,
            'equipo_id' => $this->faker->word,
            'estado_id' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
