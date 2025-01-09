<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Tipo;

class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $tipo = Tipo::first();
        if (!$tipo) {
            $tipo = Tipo::factory()->create();
        }

        return [
            'numero_serie' => $this->faker->text($this->faker->numberBetween(5, 45)),
            'imei' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s'),
            'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
            'modelo_id' => $this->faker->word,
            'marca_id' => $this->faker->word,
            'tipo_id' => $this->faker->word
        ];
    }
}
