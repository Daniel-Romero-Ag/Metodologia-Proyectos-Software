<?php

namespace Database\Factories;

use App\Models\Estudios_programado;
use Illuminate\Database\Eloquent\Factories\Factory;

class Estudios_programadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Estudios_programado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_estudio'=>$this->faker->numberBetween(1,30),
            'id_paciente'=>$this->faker->numberBetween(1,30),
            'fecha'=>$this->faker->numberBetween(1,30),
            'hora'=>$this->faker->numberBetween(1,30)
        ];
    }
}
